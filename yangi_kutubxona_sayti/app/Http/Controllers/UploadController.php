<?php

namespace App\Http\Controllers;

use App\Models\TemoraryFile;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('book-images/tmp/' . $folder, $filename);
            TemoraryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);
            return $folder;
        }
        return '';
    }
}

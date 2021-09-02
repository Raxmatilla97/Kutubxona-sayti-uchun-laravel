<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use App\Models\Libray;
use App\Models\TemoraryFile;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ebooks = Books::all();

        return view('backend.pages.books', compact('ebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kutubxonalar = Libray::all();
        $categories = Category::all();
        return view('backend.pages.books-create', compact('categories', 'kutubxonalar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temporaryFile = TemoraryFile::where('folder', $request->img)->first();
        if ($temporaryFile) {
            $request->addMedia(storage_path('app/public/book-images/tmp/' . $request->img . '/' . $temporaryFile->filename))
            ->toMediaCollection('img');
            rmdir(storage_path('app/public/book-images/tmp/'. $request->img));
            $temporaryFile->delete();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {

        $books->delete();

        return redirect()->route('libraries.index')
            ->with('success', "Siz belgilagan kutubxona o'chirildi!");
    }
}

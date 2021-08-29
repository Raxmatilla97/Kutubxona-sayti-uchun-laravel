<?php

namespace App\Http\Controllers;

use App\Models\Kutubxonalar;
use Illuminate\Http\Request;

class KutubxonalarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kutubxonalar = Kutubxonalar::latest()->paginate(5);

        return view('backend.pages.library-list', compact('kutubxonalar'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.library-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'manzil' => 'required|max:255',
            'img' => 'required|image|mimes:jpg,png,jpeg|max:1048',

        ]);

        $kutubxona = new Kutubxonalar();

        $kutubxona->title = $request['title'];
        $kutubxona->manzil = $request['manzil'];
        $kutubxona->description = $request['description'];

        // Manzilni avtomatik slug qiberadi
        $kutubxona->slug = str_slug($request['title']);
        $latestSlug = Kutubxonalar::whereRaw("slug RLIKE '^{$kutubxona->slug}(-[0-9]*)?$'")->latest('id')->value('slug');
        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);
            $number = intval(end($pieces));
            $kutubxona->slug .= '-' . ($number + 1);
            // cspi.uz/video
            // cspi.uz/video1
            // cspi.uz/video2
        }
        if ($image = $request->file('img')) {
            $destinationPath = 'book_image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $kutubimg['img'] = $destinationPath."$profileImage";


        }
              $kutubxona->img = $kutubimg['img'] ;

        $kutubxona->save();

        return redirect()->route('libraries.index')->with('success',"Siz kiritgan kutubxona ma'lumotlari bazaga kiritildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kutubxonalar  $kutubxonalar
     * @return \Illuminate\Http\Response
     */
    public function show(Kutubxonalar $kutubxonalar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kutubxonalar  $kutubxonalar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kutubxonalar $kutubxonalar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kutubxonalar  $kutubxonalar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kutubxonalar $kutubxonalar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kutubxonalar  $kutubxonalar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kutubxonalar $kutubxonalar)
    {
        //
    }
}

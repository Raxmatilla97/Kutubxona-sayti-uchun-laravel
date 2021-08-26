<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('backend.pages.category', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_name' => 'required|max:255',            
            
        ]);

        $category = new Category();

        $category->category_name = $request['category_name'];
        if ($request['has_active']) {
            $category->has_active = $request['has_active'];
        }else{
            $category->has_active = '0';
        }       
        
        $category->slug = str_slug($request['category_name']);
        $latestSlug = Category::whereRaw("slug RLIKE '^{$category->slug}(-[0-9]*)?$'")->latest('id')->value('slug');
        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);
            $number = intval(end($pieces));
            $category->slug .= '-' . ($number + 1);
            // cspi.uz/video
            // cspi.uz/video1
            // cspi.uz/video2
        }

        $category->save();

        return redirect()->route('category.index');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sub_store(Request $request)
    {
        $request->validate([
            'subcategory_name' => 'required|max:255',            
            
        ]);

        $subcategory = new Subcategory();

        $subcategory->subcategory_name = $request['subcategory_name'];
        $subcategory->category_id = $request['category_id'];
        if ($request['has_active']) {
            $subcategory->has_active = $request['has_active'];
        }else{
            $subcategory->has_active = '0';
        }       
        
        $subcategory->sub_slug = str_slug($request['subcategory_name']);
        $latestSlug = Subcategory::whereRaw("sub_slug RLIKE '^{$subcategory->sub_slug}(-[0-9]*)?$'")->latest('id')->value('sub_slug');
        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);
            $number = intval(end($pieces));
            $subcategory->sub_slug .= '-' . ($number + 1);
            // cspi.uz/video
            // cspi.uz/video1
            // cspi.uz/video2
        }

        $subcategory->save();

        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

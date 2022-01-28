<?php

namespace App\Http\Controllers\Backend;

use App\BlogTag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_tags = BlogTag::latest()->get();
        return view('backend.pages.blog-tags.index', compact('blog_tags'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blog-tags.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog_tag = BlogTag::updateOrCreate(
            ['tag' => $request->tag]
        );

        return redirect()->back()->with('store_success', 'Tag has been added successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.pages.blog-tags.show');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_tag = BlogTag::find($id);

        return view('backend.pages.blog-tags.edit', compact('blog_tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog_tag = BlogTag::where('id', $id)
        ->update(['tag' => $request->tag]);
        return redirect()->back()->with('update_success', 'Tag has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = BlogTag::where('id',$id)->delete();
        return redirect()->back()->with('delete_success', 'A Tag has been deleted');
    }
}

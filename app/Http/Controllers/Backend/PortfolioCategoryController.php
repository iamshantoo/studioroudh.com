<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio_categories = PortfolioCategory::latest()->get();
        return view('backend.pages.portfolio-categories.index', compact('portfolio_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.portfolio-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio_category = PortfolioCategory::updateOrCreate(
            ['category_name' => $request->category_name]
        );

        return redirect()->back()->with('store_success', 'Name has been added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.pages.portfolio-categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio_category = PortfolioCategory::find($id);

        return view('backend.pages.portfolio-categories.edit', compact('portfolio_category'));
        //
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
        //
        $portfolio_category = PortfolioCategory::where('id', $id)
        ->update(['category_name' => $request->category_name]);
        return redirect()->back()->with('update_success', 'Name has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = PortfolioCategory::where('id',$id)->delete();
        return redirect()->back()->with('delete_success', 'A Portdolio Category has been deleted');
    }
}

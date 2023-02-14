<?php

namespace App\Http\Controllers;

use App\Models\DayMenu;
use Illuminate\Http\Request;
use App\Models\Dish;

class DayMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dish = Dish::All();
        // $data = DayMenu::
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DayMenu  $dayMenu
     * @return \Illuminate\Http\Response
     */
    public function show(DayMenu $dayMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DayMenu  $dayMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(DayMenu $dayMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayMenu  $dayMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DayMenu $dayMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayMenu  $dayMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DayMenu $dayMenu)
    {
        //
    }
}

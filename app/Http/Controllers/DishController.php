<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDishRequest;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;
use App\Models\DayMenu;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = Dish::paginate(5);
        $day = DayMenu::All();
        return view('dashboard',['data'=>$data],['menu'=>$day]);
    }
    
    public function welcome()
    {
        $data = Dish::all();
        $data1 = DayMenu::all();
        return view('welcome',['data'=>$data],['menu'=>$data1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('add',['categories'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request)
    {
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }
        Dish::create($input);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dish::find($id);
        return view('edit', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }
        $dish->update($input);
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dish::destroy($id);
        return redirect()->route('dashboard');
    }

    public function editMenu()
    {
        $day = DayMenu::All();
        $data = Dish::All();
        return view('menu', ['data'=>$data], ['menu'=>$day]);
    }

    public function updateMenu(Request $request){
        $array_menu = $request["menu"];
        $day = $request["day"];
        $menu = join(", ",$array_menu);
        $test = DayMenu::find($day);
        $test->where('id', $day)->update(array('menu' => "$menu"));
        return redirect()->route('dashboard');
    }
}
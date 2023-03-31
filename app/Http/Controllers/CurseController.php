<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curse;

class CurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curses = Curse::all();
        return view('curses.index')->with('curses', $curses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Curse::create($input);
        return redirect('curse')->with('flash_message', 'Курс добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curse = Curse::find($id);
        return view('curses.show')->with('curses', $curse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curse = Curse::find($id);
        return view('curses.edit')->with('curses', $curse);
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
        $curse = Curse::find($id);
        $input = $request->all();
        $curse->update($input);
        return redirect('curse')->with('flash_message', 'Курс обнавлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curse::destroy($id);
        return redirect('curse')->with('flash_message', 'Курс удален!');
    }
}

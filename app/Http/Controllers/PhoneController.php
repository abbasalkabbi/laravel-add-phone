<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phones.index',['phones'=>phone::all()]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name-phone' => 'required|max:255|string|min:3',
            'price-phone' => 'required|integer',
        ]);
        $new_phone=new phone();
        $new_phone->name=$request->input("name-phone");
        $new_phone->price=$request->input("price-phone");
        $new_phone->orgine='raq';
        $new_phone->save();
        return redirect()->route("phones.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index=phone::findOrFail($id);
        return view('phones.phone',['phone'=>$index]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $to_edit=phone::findOrFail($id);
        return view('phones.edit',['phone'=>$to_edit]);
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
        $validated = $request->validate([
            'name-phone' => 'required|max:255|string|min:3',
            'price-phone' => 'required|integer',
        ]);
        $to_upate=phone::findOrFail($id);
        $to_upate->name=$request->input("name-phone");
        $to_upate->price=$request->input("price-phone");
        $to_upate->orgine='raq';
        $to_upate->save();
        return redirect()->route('phones.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $to_delete=phone::findOrFail($id);
        $to_delete->delete();
        return redirect()->route("phones.index");
    }
}

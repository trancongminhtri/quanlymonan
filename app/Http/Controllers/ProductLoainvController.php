<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loainv;

class ProductLoainvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dslnv = loainv::all();
        return view("product_loainv",compact('dslnv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_loainvcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lnv = new loainv;
        $lnv->tenloainv = $request->tenlnv;
        $lnv->trangthai = $request->trangthai;
        $lnv->save();
        return view('product_loainvshow',compact('lnv'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lnv = loainv::find($id);
        return view("product_loainvshow",compact('lnv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lnv = loainv::find($id);
        return view("product_loainvedit",compact('lnv'));
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
        $lnv = loainv::find($id);
        $lnv->tenloainv = $request->tenlnv;
        $lnv->trangthai = $request->trangthai;
        $lnv->save();       
        $dslnv = loainv::all();
        return redirect("productloainv");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lnv = loainv::findOrFail($id);
        $lnv->trangthai = 0;
        $lnv->save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisp;

class ProductLoaispController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dslsp = loaisp::all();
        return view("product_loaisp",compact('dslsp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_loaispcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lsp = new loaisp;
        $lsp->tenlsp = $request->tenlsp;
        $lsp->trangthai = $request->trangthai;
        $lsp->save();
        return view("product_loaispshow",compact('lsp'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lsp = loaisp::find($id);
        return view("product_loaispshow",compact('lsp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lsp = loaisp::find($id);
        return view("product_loaispedit",compact('lsp'));
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
        $lsp = loaisp::find($id);
        $lsp->tenlsp = $request->tenlsp;
        $lsp->trangthai = $request->trangthai;
        $lsp->save();       
        $dslsp = loaisp::all();
        return redirect("productloaisp");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lsp = loaisp::findOrFail($id);
        $lsp->trangthai = 0;
        $lsp->save();
    }
}

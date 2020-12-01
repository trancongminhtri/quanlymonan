<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\loaisp;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dssp = sanpham::all();
        return view("product",compact('dssp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsloaisp['data'] = loaisp::all();
        return view("productcreate", $dsloaisp);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sp = new sanpham;
        $sp->idlsp = $request->maloai;
        $sp->idha = $request->mahinh;
        $sp->tensp = $request->tensp;
        $sp->dongia = $request->gia;
        $sp->mota = $request->mota;
        $sp->trangthai = $request->trangthai;
        $sp->save();       
        return view("productshow",compact('sp'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sp = sanpham::find($id);
        return view("productshow",compact('sp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp = sanpham::find($id);
        return view("productedit",compact('sp'));
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
        $sp = sanpham::find($id);
        $sp->idlsp = $request->maloai;
        $sp->idha = $request->mahinh;
        $sp->tensp = $request->tensp;
        $sp->dongia = $request->gia;
        $sp->mota = $request->mota;
        $sp->trangthai = $request->trangthai;
        $sp->save();       
        $dssp = sanpham::all();
        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $sp = sanpham::findOrFail($id);
        $sp->trangthai = 0;
        $sp->save();
        // $dssp = sanpham::all();
        // return view("product",compact('dssp'));
    }
}


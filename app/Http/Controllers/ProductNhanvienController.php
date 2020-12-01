<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\loainv;
use Illuminate\Support\Facades\DB;

class ProductNhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsnv = nhanvien::all();
        return view("product_nhanvien",compact('dsnv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsloainv['data'] = loainv::all();
        return view("product_nvcreate", $dsloainv);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nv = new nhanvien;
        $nv->idlnv = $request->loainv;
        $nv->hoten = $request->ht_nv;
        $nv->gioitinh = $request->gt;
        $nv->cmnd = $request->cmnd;
        $nv->ngaysinh = $request->ngaysinh;
        $nv->dienthoai = $request->dienthoai;
        $nv->diachi = $request->diachi;
        $nv->taikhoan = $request->taikhoan;
        $nv->matkhau = $request->matkhau;
        $nv->trangthai = 1;
        $nv->save();       
        return view("product_nvshow",compact('nv'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nv = nhanvien::find($id);
        $dsloainv['data'] = loainv::all();
        return view("product_nvshow",compact('nv'),$dsloainv);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsloainv['data'] = loainv::all();
        $nv = nhanvien::find($id);
        return view('product_nvedit',compact('nv'),$dsloainv);
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
        $nv = nhanvien::find($id);
        $nv->idlnv = $request->loainv;
        $nv->hoten = $request->ht_nv;
        $nv->gioitinh = $request->gt;
        $nv->cmnd = $request->cmnd;
        $nv->ngaysinh = $request->ngaysinh;
        $nv->dienthoai = $request->dienthoai;
        $nv->diachi = $request->diachi;
        $nv->taikhoan = $request->taikhoan;
        $nv->matkhau = $request->matkhau;
        $nv->trangthai = $request->trangthai;
        $nv->save();       
        $dsnv = nhanvien::all();
        return redirect("productnhanvien");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nv = nhanvien::findOrFail($id);
        $nv->trangthai = 0;
        $nv->save();
        // $dsnv = nhanvien::all();
        // return view("product_nhanvien",compact('dsnv'));
    }
}

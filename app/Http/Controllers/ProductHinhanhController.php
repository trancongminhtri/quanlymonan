<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hinhanh;

class ProductHinhanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dsha = hinhanh::latest()->paginate(5);
        $dsha = hinhanh::all();
        return view("product_hinhanh", compact('dsha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("product_hacreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duongdan = $request->file('duongdan');
        $duongdan_new = rand() . '.' . $duongdan->getClientOriginalExtension();
        $duongdan->move(public_path('imgs_product'), $duongdan_new);
        $ha = new hinhanh();
        $ha->tenha = $request->tenha;
        $ha->duongdan = $duongdan_new;
        $ha->trangthai = 1;
        $ha->save();
        return view("product_hashow", compact('ha'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ha = hinhanh::findOrFail($id);
        return view("product_hashow", compact('ha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ha = hinhanh::findOrFail($id);
        return view('product_haedit', compact('ha'));
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
        $duongdan_name = $request->hidden_duongdan;
        $duongdan = $request->file('duongdan');
        if ($duongdan != '') {
            $duongdan_name = rand() . '.' . $duongdan->getClientOriginalExtension();
            $duongdan->move(public_path('imgs_product'), $duongdan_name);
        }
        $ha = hinhanh::find($id);
        $ha->tenha = $request->tenha;
        $ha->duongdan = $duongdan_name;
        $ha->trangthai = $request->trangthai;
        $ha->save();
        $dsha = hinhanh::all();
        return redirect("producthinhanh");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ha = hinhanh::findOrFail($id);
        $ha->trangthai = 0;
        $ha->save();
    }
}

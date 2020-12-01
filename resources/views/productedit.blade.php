@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Sửa món trong danh sách</h2>
    <form action="{{route('product.update', $sp['id'])}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="maloai">Mã loại sản phẩm:</label>
            <input type="number" class="form-control" id="maloai" placeholder="Mã loại sản phẩm" name="maloai" value="{{$sp['idlsp']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="mahinh">Mã hình ảnh:</label>
            <input type="number" class="form-control" id="mahinh" placeholder="Mã hình ảnh" name="mahinh" value="{{$sp['idha']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="tensp">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="tensp" placeholder="Tên sản phẩm" name="tensp" value="{{$sp['tensp']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="gia">Đơn giá:</label>
            <input type="number" class="form-control" id="gia" name="gia" value="{{$sp['dongia']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="mota">Mô tả:</label>
            <input type="text" class="form-control" id="mota" placeholder="Mô tả" name="mota" value="{{$sp['mota']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="trangthai">Trang thái:</label>
            <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" value="{{$sp['trangthai']}}" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sửa món</button>
        </div>
    </form>
</div>

@endsection
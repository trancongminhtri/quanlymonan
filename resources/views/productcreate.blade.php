@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Thêm món mới vào danh sách</h2>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @csrf
        <div class="form-group">
            <label for="maloai">Mã loại sản phẩm:</label>
            <select name="maloai" id="maloai">
                @foreach($data as $item)
                <option value="{{$item['id']}}">{{$item['tenlsp']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mahinh">Mã hình ảnh:</label>
            <input type="number" class="form-control" id="mahinh" placeholder="Mã hình ảnh" name="mahinh" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="tensp">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="tensp" placeholder="Tên sản phẩm" name="tensp" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="gia">Đơn giá:</label>
            <input type="number" class="form-control" id="gia" name="gia" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="mota">Mô tả:</label>
            <input type="text" class="form-control" id="mota" placeholder="Mô tả" name="mota" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="trangthai">Trang thái:</label>
            <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm món</button>
    </form>
</div>
@endsection
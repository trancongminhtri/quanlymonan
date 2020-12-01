@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Thêm loại sản phẩm mới vào danh sách</h2>
    <form action="{{route('productloaisp.store')}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @csrf
        <div class="form-group">
            <label for="tenlsp">Tên loại sản phẩm:</label>
            <input type="text" class="form-control" id="tenlsp" placeholder="Tên loại sản phẩm" name="tenlsp" required>
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
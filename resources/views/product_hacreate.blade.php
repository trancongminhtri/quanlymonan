@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Thêm hình ảnh mới vào danh sách</h2>
    <form action="{{route('producthinhanh.store')}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @csrf
        <div class="form-group">
            <label for="tenha">Tên hình ảnh:</label>
            <input type="text" class="form-control" id="tenha" placeholder="Tên hình ảnh" name="tenha" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="duongdan">Đường dẫn:</label>
            <input type="file" id="duongdan" name="duongdan" required>
        </div>
        <div class="form-group">
            <label for="trangthai">Trang thái:</label>
            <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm hình ảnh</button>
    </form>
</div>
@endsection
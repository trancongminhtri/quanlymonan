@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Sửa loại sản phẩm trong danh sách</h2>
    <form action="{{route('productloaisp.update', $lsp['id'])}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="tenlsp">Tên loại sản phẩm:</label>
            <input type="text" class="form-control" id="tenlsp" name="tenlsp" value="{{$lsp['tenlsp']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="trangthai">Trang thái:</label>
            <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" value="{{$lsp['trangthai']}}" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sửa món</button>
        </div>
    </form>
</div>

@endsection
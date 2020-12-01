@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Sửa loại nhân viên trong danh sách</h2>
    <form action="{{route('productloainv.update', $lnv['id'])}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="tenlnv">Tên loại nhân viên:</label>
            <input type="text" class="form-control" id="tenlnv" name="tenlnv" value="{{$lnv['tenloainv']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="trangthai">Trang thái:</label>
            <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" value="{{$lnv['trangthai']}}" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sửa loại nhân viên</button>
        </div>
    </form>
</div>

@endsection
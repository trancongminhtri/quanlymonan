@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Chi tiết loại nhân viên</h2>
    <div class="form-group">
        <label for="maloai">Mã loại nhân viên:</label>
        <input type="number" class="form-control" id="maloai" name="maloai" value="{{$lnv['id']}}" required>
    </div>
    <div class="form-group">
        <label for="tenlsp">Tên loại nhân viên:</label>
        <input type="text" class="form-control" id="tenlsp" name="tenlsp" value="{{$lnv['tenloainv']}}" required>
    </div>
    <div class="form-group">
        <label for="trangthai">Trang thái:</label>
        <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" value="{{$lnv['trangthai']}}" min="0" max="1" required>
    </div>
    <div class="form-group">
        <a href="{{route('productloainv.index')}}">
            <button type="submit" class="btn btn-primary">Trang chủ</button>
        </a>
    </div>
</div>
@endsection
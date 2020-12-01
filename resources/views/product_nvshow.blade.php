@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Thông tin chi tiết nhân viên</h2>
    <div class="form-group">
        <label for="loainv">Loại nhân viên:</label>
        @foreach($data as $item)
        @if($item['id'] == $nv['idlnv'])
        <input type="text" class="form-control" id="gioitinh" value="{{$item['tenloainv']}}" name="gioitinh" required>
        @endif
        @endforeach
    </div>
    <div class="form-group">
        <label for="ht_nv">Họ tên</label>
        <input type="text" class="form-control" id="ht_nv" value="{{$nv['hoten']}}" name="ht_nv" required>
    </div>
    <div class="form-group">
        <label for="gioitinh">Giới tính</label>
        <input type="text" class="form-control" id="gioitinh" value="{{$nv['gioitinh']}}" name="gioitinh" required>
    </div>
    <div class="form-group">
        <label for="cmnd">CMND</label>
        <input type="text" class="form-control" id="cmnd" value="{{$nv['cmnd']}}" name="cmnd" required>
    </div>
    <div class="form-group">
        <label for="ngaysinh">Ngày sinh:</label>
        <input type="text" class="form-control" id="ngaysinh" name="ngaysinh" value="{{$nv['ngaysinh']}}" required>
    </div>
    <div class="form-group">
        <label for="dienthoai">Điện thoại</label>
        <input type="text" class="form-control" id="dienthoai" name="dienthoai" value="{{$nv['dienthoai']}}" required>
    </div>
    <div class="form-group">
        <label for="diachi">Địa chỉ</label>
        <input type="text" class="form-control" id="diachi" name="diachi" value="{{$nv['diachi']}}" required>
    </div>
    <div class="form-group">
        <label for="taikhoan">Tài khoản</label>
        <input type="text" class="form-control" id="taikhoan" name="taikhoan" value="{{$nv['taikhoan']}}" required>
    </div>
    <div class="form-group">
        <label for="matkhau">Mật Khẩu</label>
        <input type="password" class="form-control" id="matkhau" name="matkhau" value="{{$nv['matkhau']}}" required>
    </div>
    <div class="form-group">
        <label for="trangthai">Trạng thái</label>
        <input type="number" class="form-control" id="trangthai" name="trangthai" value="{{$nv['trangthai']}}" min="0" max="1" required>
    </div>
    <div class="form-group">
        <a href="{{route('productnhanvien.index')}}">
            <button type="submit" class="btn btn-primary">Trang chủ</button>
        </a>
    </div>
</div>

@endsection
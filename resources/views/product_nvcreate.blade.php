@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Thêm nhân viên mới vào danh sách</h2>
    <form action="{{route('productnhanvien.store')}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @csrf
        <div class="form-group">
            <label for="loainv">Mã loại nhân viên:</label>
            <select name="loainv" id="loainv">
                @foreach($data as $item)
                <option value="{{$item['id']}}">{{$item['tenloainv']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ht_nv">Họ tên</label>
            <input type="text" class="form-control" id="ht_nv" name="ht_nv" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="gt">Giới tính:</label>
            <select name="gt" id="gt">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cmnd">CMND</label>
            <input type="number" class="form-control" id="cmnd" name="cmnd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="ngaysinh">Ngày sinh:</label>
            <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="dienthoai">Điện thoại</label>
            <input type="number" class="form-control" id="dienthoai" name="dienthoai" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="diachi">Địa chỉ</label>
            <input type="text" class="form-control" id="diachi" name="diachi" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="taikhoan">Tài khoản</label>
            <input type="text" class="form-control" id="taikhoan" name="taikhoan" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="matkhau">Mật Khẩu</label>
            <input type="password" class="form-control" id="matkhau" name="matkhau" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="matkhau">Trạng thái</label>
            <input type="number" class="form-control" id="trangthai" name="trangthai" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm nhân viên</button>
    </form>
</div>
@endsection
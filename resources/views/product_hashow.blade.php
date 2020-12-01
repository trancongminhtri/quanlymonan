@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Chi tiết hình ảnh</h2>
    <div class="form-group">
        <label for="maha">Mã hình ảnh:</label>
        <input type="number" class="form-control" id="maha" name="maha" value="{{$ha['id']}}" required>
    </div>
    <div class="form-group">
        <label for="tenha">Tên hình ảnh:</label>
        <input type="text" class="form-control" id="tenha" name="tenha" value="{{$ha['tenha']}}" required>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh:</label><br>
        <img src="{{URL::to('/')}}/imgs_product/{{$ha['duongdan']}}" class="img-thumbnail" width="100" alt="">
    </div>
    <div class="form-group">
        <label for="tenha">Tên file:</label>
        <input type="text" class="form-control" id="tenha" name="tenha" value="{{$ha['duongdan']}}" required>
    </div>
    <div class="form-group">
        <label for="trangthai">Trang thái:</label>
        <input type="number" class="form-control" id="trangthai" placeholder="" name="trangthai" value="{{$ha['trangthai']}}" min="0" max="1" required>
    </div>
    <div class="form-group">
        <a href="{{route('producthinhanh.index')}}">
            <button type="submit" class="btn btn-primary">Trang chủ</button>
        </a>
    </div>
</div>
@endsection
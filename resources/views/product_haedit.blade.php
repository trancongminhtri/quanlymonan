@extends('welcome')
@section('content')
<div class="container">
    <h2 class="h2_text">Sửa hình ảnh trong danh sách</h2>
    <form action="{{route('producthinhanh.update', $ha['id'])}}" method="POST" enctype="multipart/form-data" class="was-validated">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="tenha">Tên hình ảnh:</label>
            <input type="text" class="form-control" id="tenha" name="tenha" value="{{$ha['tenha']}}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="duongdan">Đường dẫn:</label>
            <input type="file" id="duongdan" name="duongdan" required><br>
            <img src="{{URL::to('/')}}/imgs_product/{{$ha['duongdan']}}" class="img-thumbnail" width="100" alt="">
            <input type="hidden" name="hidden_duongdan" value="{{$ha['duongdan']}}">
        </div>
        <div class="form-group">
            <label for="trangthai">Trang thái:</label>
            <input type="number" class="form-control" id="trangthai" value="{{$ha['trangthai']}}" name="trangthai" min="0" max="1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">Sửa hình ảnh</button>
    </form>
</div>

@endsection
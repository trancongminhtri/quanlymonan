@extends('welcome')
@section('content')
<!-----------------------------------------------Bootstrap Start Table----------------------------------------------->
<div class="tb">
    <h2 class="h2_text">Danh sách món ăn</h2>
</div>
<a href="product/create">
    <div class="add-new">
        <p class="add-new-text">Thêm mới</p>
    </div>
</a>
<form class="form" action="">
    <hr>
    <input type="text" placeholder="Chọn loại cần tìm" class="input clear-input">
    <input type="text" placeholder="Nhập từ khóa" class="input clear-input">
    <button>Tìm kiếm</button>
</form>
<div class="table-product"">
    <table class=" table table-hover" id="table-table">
    <thead>
        <tr>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Mã loại sản phẩm</th>
            <th scope="col">Mã hình ảnh</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Trạng thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($dssp as $sp)
        <tr>
            <th scope="row">{{$sp['id']}}</th>
            <td>{{$sp['idlsp']}}</td>
            <td>{{$sp['idha']}}</td>
            <td>{{$sp['tensp']}}</td>
            <td>{{$sp['dongia']}}</td>
            <td>{{$sp['mota']}}</td>
            <td>{{$sp['trangthai']}}</td>
            <td>
                <a class="table-link" href="{{route('product.edit', $sp['id'])}}">Edit</a>
                <a class="table-link" href="{{route('product.show', $sp['id'])}}">Detail</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $sp['id']}}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<!-----------------------------------------------Bootstrap End Table----------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning" id="exampleModalLabel">Xóa món:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p class="d-flex justify-content-center text-danger">Bạn thực sự muốn xóa???</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline-success" id="ok_button">OK!</button>
            </div>
        </div>
    </div>
</div>
<script>
    var recipient;
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        recipient = button.data('whatever');
        var modal = $(this);
        modal.find('.modal-title').text('Xóa món: ' + recipient);
    });
    $('#ok_button').click(function() {
        $.ajax({
            url: "product/" + recipient + "/destroy",
            beforeSend: function() {
                $('#ok_button').text('Deleting...');
            },
            success:function(){
                setTimeout(function(){
                    location.reload();
                    // $('#table-table').DataTable().ajax.reload();
                },500)
            }
        })
    });
</script>
@endsection
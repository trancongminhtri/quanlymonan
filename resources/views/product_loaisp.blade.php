@extends('welcome')
@section('content')
<!-----------------------------------------------Bootstrap Start Table----------------------------------------------->
<div class="tb">
    <h2 class="h2_text">Danh sách loại nguyên vật liệu</h2>
</div>
<a href="productloaisp/create">
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
<div class="table-product">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Mã loại sản phẩm</th>
                <th scope="col">Tên loại sản phẩm</th>
                <th scope="col">Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dslsp as $lsp)
            <tr>
                <th scope="row">{{$lsp['id']}}</th>
                <td>{{$lsp['tenlsp']}}</td>
                <td>{{$lsp['trangthai']}}</td>
                <td>
                    <a class="table-link" href="{{route('productloaisp.edit', $lsp['id'])}}">Edit</a>
                    <a class="table-link" href="{{route('productloaisp.show', $lsp['id'])}}">Detail</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $lsp['id']}}">Delete</button>
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
                <h5 class="modal-title text-warning" id="exampleModalLabel">Xóa loại sản phẩm:</h5>
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
        modal.find('.modal-title').text('Xóa loại sản phẩm: ' + recipient);
    });
    $('#ok_button').click(function() {
        $.ajax({
            url: "productloaisp/" + recipient + "/destroy",
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
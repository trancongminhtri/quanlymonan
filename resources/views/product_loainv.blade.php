@extends('welcome')
@section('content')
<!-----------------------------------------------Bootstrap Start Table----------------------------------------------->
<div class="tb">
    <h2 class="h2_text">Danh sách loại nhân viên</h2>
</div>
<a href="productloainv/create">
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
                <th scope="col">Mã loại nhân viên</th>
                <th scope="col">Tên loại nhân viên</th>
                <th scope="col">Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dslnv as $lnv)
            <tr>
                <th scope="row">{{$lnv['id']}}</th>
                <td>{{$lnv['tenloainv']}}</td>
                <td>{{$lnv['trangthai']}}</td>
                <td>
                    <a class="table-link" href="{{route('productloainv.edit', $lnv['id'])}}">Edit</a>
                    <a class="table-link" href="{{route('productloainv.show', $lnv['id'])}}">Detail</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $lnv['id']}}">Delete</button>
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
                <h5 class="modal-title text-warning" id="exampleModalLabel">Xóa loại nhân viên:</h5>
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
        modal.find('.modal-title').text('Xóa loại nhân viên: ' + recipient);
    });
    $('#ok_button').click(function() {
        $.ajax({
            url: "productloainv/" + recipient + "/destroy",
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
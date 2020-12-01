@extends('welcome')
@section('content')
<!-----------------------------------------------Bootstrap Start Table----------------------------------------------->
<div class="tb">
    <h2 class="h2_text">Danh sách hóa đơn</h2>
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
<div class="table-product">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Mã loại hóa đơn</th>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Ngày lập</th>
                <th scope="col">Giờ lập</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Khách trả</th>
                <th scope="col">Tiền thừa</th>
                <th scope="col">Tầng</th>
                <th scope="col">Bàn</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dshd as $hd)
            <tr>
                <th scope="row">{{$hd['id']}}</th>
                <td>{{$hd['idnv']}}</td>
                <td>{{$hd['ngaylap']}}</td>
                <td>{{$hd['giolap']}}</td>
                <td>{{$hd['thanhtien']}}</td>
                <td>{{$hd['khachtra']}}</td>
                <td>{{$hd['tienthua']}}</td>
                <td>{{$hd['tang']}}</td>
                <td>{{$hd['ban']}}</td>
                <td>
                    <a class="table-link" href="#">Edit</a>
                    <a class="table-link" href="#">Detail</a>
                    <a class="table-link" href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-----------------------------------------------Bootstrap End Table----------------------------------------------->
@endsection
@extends('quanly.layout.layout')
@section('head')
    <title>Thêm</title>
@endsection
@section('content')
    
@if (count($errors)>0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span></button>
        @foreach ($errors->all() as $err)
            {{ $err }} <br>
        @endforeach
    </div>
@endif
@if (session('thongbao'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span></button>
            {{ session('thongbao') }}
    </div>
@endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm mới</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('marketing.postThem') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" name="noidung" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Người tạo</label>
                        <select name="nguoitao" id="" class="form-control">
                            <option value="" disabled selected>---Người tạo---</option>
                            @if (isset($nv))
                            @foreach ($nv as $item)
                                <option value="{{ $item->id }}">{{ $item->ten }}</option>
                            @endforeach
                                
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Người phụ trách</label>
                        <input class="form-control" name="nguoiphutrach" placeholder="Nhập họ tên" />
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input type="date" class="form-control" name="ngaybatdau" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input type="date" class="form-control" name="ngayketthuc" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <input class="form-control" name="trang_thai" placeholder="Trạng thái" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection
@extends('admin.master')

@section('content')
     <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h2>Thêm mới loại sản phẩm</h2>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $err)
                            <div class="alert alert-danger">
                                {{ $err }} <br>
                            </div>
                        @endforeach
                    @endif
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div>
                    @endif
                </div>
                <div class="card-body table-full-width table-responsive">
                    <form method="POST" action="{{ route('postAdd-loaisanpham') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="tên loại sản phẩm ">
                        </div>
                        <div class="form-group form-check">
                        <button type="submit" name="add_catalog" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
@endsection

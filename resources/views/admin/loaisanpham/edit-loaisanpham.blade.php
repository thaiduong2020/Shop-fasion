@extends('admin.master')


@section('content')
    <div class="card ">
    <div class="card-header">
      <h1>cập nhật </h1>
      {{ $sua->name }}
    </div>

    @if (count($errors) > 0 )
          <div class="alert alert-danger">
              @foreach ($errors->all() as $err)
                  {{ $err }}<br>
              @endforeach
          </div>
      @endif
      @if (session('thongbao'))
          <div class="alert alert-success">
              {{ session('thongbao') }}
          </div>
      @endif

    <div class="card-body">
      <form method="POST" action="{{ route('postEdit-loaisanpham', ['id' => $sua->id]) }}" >
        @csrf

          <div class="form-group">
              <label for="exampleInputPassword1">Tên loại sản phẩm mới</label>
              <input type="text" class="form-control" value="{{ $sua->name }}"  name="name" placeholder="tên sản phẩm mới">
          </div>
          <div class="form-group form-check">
          <button type="submit" name="update_data" class="btn btn-primary">cập nhật</button>
      </form>

    </div>
@endsection

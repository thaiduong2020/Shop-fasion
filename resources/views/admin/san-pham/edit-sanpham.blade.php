@extends('admin.master')

@section('content')
<div class="col-md-12">
  <div class="card strpied-tabled-with-hover">
      <div class="card-header ">
          <h2>Thêm mới loại sản phẩm</h2>
          @if (session('thongbao'))
              <div class="alert alert-success">
                  {{ session('thongbao') }}
              </div>
          @endif
      </div>
      <div class="card-body table-full-width table-responsive">
          <form method="POST" action="{{ route('postEdit-sanpham', ['id' => $sanpham->id]) }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                  <label for="">Loại sản phẩm</label>
                  <select class="form-control" name="id_type" id="">
                    @foreach ($loai as $item)
                    <option @if ($sanpham->id_type == $item->id)
                              {{ "selected" }}
                            @endif
                    value="{{ $item->id }}">
                      {{ $item->name }}
                    </option>
                @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Tên sản phẩm</label>
                  <input type="text" class="form-control" value="{{ $sanpham->name }}" name="name" placeholder="tên loại sản phẩm ">
                  @if ($errors->has('name'))
                  <div class="alert alert-danger">
                      {{ $errors->first('name') }}
                  </div>
                  @endif
              </div>

              <div class="form-group">
                  <label for="">Mô tả</label>
                  <textarea id="editor1"  name="description">{{ $sanpham->description }}</textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Ảnh sản phẩm</label>
                  <input type="file" class="form-control"  name="image" >
                  @if ($errors->has('image'))
                  <div class="alert alert-danger">
                      {{ $errors->first('image') }}
                  </div>
                  @endif
              </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Giá sản phẩm</label>
                  <input type="number" class="form-control" value="{{ $sanpham->price }}" name="price" placeholder="giá sản phẩm">
                  @if ($errors->has('price'))
                  <div class="alert alert-danger">
                      {{ $errors->first('price') }}
                  </div>
                  @endif
              </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                  <input type="number" class="form-control" value="{{ $sanpham->quantity }}" name="quantity" placeholder="số lượng sản phẩm">
                  @if ($errors->has('quantity'))
                  <div class="alert alert-danger">
                      {{ $errors->first('quantity') }}
                  </div>
                  @endif
              </div>

              <div class="form-group form-check">
              <button type="submit" name="add_catalog" class="btn btn-primary">cập nhật</button>
          </form>
      </div>
  </div>
</div>

@endsection

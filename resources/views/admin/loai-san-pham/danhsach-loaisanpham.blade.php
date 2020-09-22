@extends('admin.master')

@section('content')

  <div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h3 class="mb-0 col">
           Loại sản phẩm
          </h3>
          @if (session('thongbao'))
          <div class="alert alert-success">
              {{ session('thongbao') }}
          </div>
        @endif
        </div>
  <div class="card-body table-full-width table-responsive">
  <table class="table table-hover table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Ngày thêm</th>
    </thead>
    <tbody>
      @foreach ($danhsach as $item)

        <tr>
          <th scope="row">{{ $item->id }}</th >
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
            <a class="btn btn-primary" href='{{ route('postEdit-loaisanpham', ['id' => $item->id]) }}'>edit</a>
            <a class="btn btn-primary" onclick="return confirm('Bạn có chắc muốn xóa ?')" href='{{ route('postDelete-loaisanpham', ['id' => $item->id]) }}'>xóa</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
  {!! $danhsach->links() !!}
  </div>
</div>
</div>
</div>
@endsection

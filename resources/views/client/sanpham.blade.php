<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- overlayScrollbars -->
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
<style>
  .pagination{
    margin-left: 68.5em;
  }
</style>
  </head>

<body>
       
   
 <div class="row " style="    height: 257px;">
   <img style="    height: 100%;
   width: 100%;" src="{{ asset('upload/product/image002.jpg') }}" alt="">
 </div>
 <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #ff971b!important ;height: 43px;"
   
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('trangchu') }}">Trang chủ</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Giới thiệu</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sản phẩm
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($type as $item)
            <a class="dropdown-item" href="{{ route('sanpham',['id'=>$item->id])}}">{{ $item->name }}</a>
                  
              @endforeach            
          </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link " href="#">Tin tức</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Liên hệ</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff; ">
      <h2 style="font-size: 14px;
      font-weight: 600;
      margin: 0;
      color: #333;">Quần nam</h2>
      <div style="display:flex; flex-wrap: wrap ">
    @foreach ($product as $item)
    <div class="card m-1" style="width: 18.7rem;">
      <a href="">
       <img src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top" alt="...">
      </a>
       <div class="card-body">
         <a href="" class="link">
           <h6  class="card-title name">{{ $item->name }}</h6>
         </a>
         <p class="card-text price" >{{ $item->price }}</p>
     </div>
   </div>
    @endforeach
  </div>
</div>


  
      
</div>
<footer>
    <div class="rowfoot1 mt-5" style="display: flex; background-color: #ffffff">
        <ul class="colfoot">
            <li><a href="/lich-su-mua-hang" title="Lịch sử mua hàng">Lịch sử mua hàng</a></li>
            <li><a href="/tra-gop" title="Hướng dẫn mua trả góp">Tìm hiểu về mua trả góp</a></li>
            <li><a href="/bao-hanh" title="Tìm trung tâm bảo hành">Chính sách bảo hành</a></li>
            <li><a href="/chinh-sach-bao-hanh-san-pham" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
            
            <li class="showmore"><a href="javascript:ShowMoreFooterSupportLink()" title="Xem thêm">Xem thêm</a></li>
            <li class="hidden"><a href="/giao-hang" title="Giao hàng & Thanh toán">Giao hàng & Thanh toán</a></li>
            <li class="hidden"><a href="/huong-dan-mua-hang" title="Hướng dẫn mua online">Hướng dẫn mua online</a></li>
            <li class="hidden"><a href="/b2b" title="Mua hàng doanh nghiệp">Bán hàng doanh nghiệp</a></li>
          
        </ul>
        <ul class="colfoot">
            <li><a href="http://mwg.vn" target="_blank" title="Giới thiệu công ty (mwg.vn)" rel="noopener">Giới thiệu công ty <span>(mwg.vn)</span></a></li>
            <li><a href="//vieclam.thegioididong.com" target="_blank" title="Tuyển dụng" rel="noopener">Tuyển dụng</a></li>
            <li><a href="/lien-he" title="Gửi góp ý, khiếu nại">Gửi góp ý, khiếu nại</a></li>
            <li><a href="/he-thong-sieu-thi-the-gioi-di-dong" title="Tìm siêu thị (2.015 shop)">Tìm siêu thị <span>(2.015 shop)</span></a></li>
                <li>
                    <a class="viewmb" rel="nofollow" href="/laptop-dell?sclient=mobile" title="Xem bản mobile">Xem bản mobile</a>
                </li>
        </ul>
        <ul class="colfoot">
            <li>
                
                <p>Gọi mua hàng <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
                <p>Gọi khiếu nại &nbsp; <a href="tel:18001062">1800.1062</a> (8:00 - 21:30)</p>
                <p>Gọi bảo hành &nbsp; <a href="tel:18001064">1800.1064</a> (8:00 - 21:00)</p>
                <p>Kỹ thuật &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="tel:18001763">1800.1763</a> (7:30 - 22:00)</p>
                <a target="_blank" rel="nofollow noopener" class="bct" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=20098" aria-label="bộ công thương mwg"><i class="icontgdd-bct"></i></a>
                <a rel="nofollow noopener" class="bct" href="/tos#giai-quyet-khieu-nai" aria-label="bộ công thương chống hàng giả"><i class="icontgdd-hg"></i></a>
                <a href="//www.dmca.com/Protection/Status.aspx?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d&refurl=http://www.thegioididong.com/laptop-dell" title="DMCA.com Protection Status" class="dmca-badge"> <img style="opacity:0.6;margin: 0px auto -8px;display: block;" src="//images.dmca.com/Badges/dmca-badge-w100-5x1-11.png?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d" alt="DMCA.com Protection Status"></a>
            </li>
        </ul>
        <ul class="colfoot collast">
            <li>
                <a target="_blank" href="https://facebook.com/thegioididongcom" class="linkfb" rel="noopener">
                    <i class="icontgdd-share1"></i>3.5tr
                </a>
                <a target="_blank" href="https://www.youtube.com/user/TGDDVideoReviews?sub_confirmation=1" class="linkyt" rel="noopener">
                    <i class="icontgdd-share3"></i>720k
                </a>
                <div class="group">
                    <label>Website cùng tập đoàn:</label>
                    <a href="//www.maiamtgdd.vn" target="_blank" rel="noopener" class="ma" aria-label="www.maiamtgdd.vn"><i class="iconlogo-ma"></i></a>
                    <a href="//www.dienmayxanh.com" target="_blank" rel="noopener" class="dm" aria-label="www.dienmayxanh.com"><i class="iconlogo-dmx"></i></a>
                    <a href="//www.bachhoaxanh.com" target="_blank" rel="noopener" class="bhx" aria-label="www.bachhoaxanh.com"><i class="iconlogo-bhx"></i></a>
                </div>
            </li>
        </ul>
    </div>
    <div class="rowfoot2">
        <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020. Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. <a href="/thoa-thuan-su-dung-trang-mxh">Xem chính sách sử dụng</a></p>
    </div>
</footer>
</body>

</html>
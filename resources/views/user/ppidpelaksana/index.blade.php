@extends('layouts.frontend.appnew')
@extends('layouts.frontend.konten')
@section('content')


  <div class="body-inner">

    @include('layouts.frontend.topbar')
    <!--/ Topbar end -->
<!-- Header start -->
@include('layouts.frontend.header')
<!--/ Header end -->

<div id="banner-area" class="banner-area" style="background-image:url(frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Profil</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Pemerintah Kota Madiun</a></li>
                      <li class="breadcrumb-item"><a href="#">Profil PPID Kota Madiun</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="post">

          <div class="post-body">
            <div class="entry-header">
              <h1 class="entry-title">
                <a href="news-single.html"><h2 style="margin-top:-35px;">{{ $title }}</h2></a>
              </h1>
            </div><!-- header end -->

            <br>

            <div class="entry-content">
           <div class="card-body" style="margin-left:-18px;">
                    <table class="table display table-bordered table-striped">
                      <thead>
                    <tr style="background-color: #ccd1d1;">
                        <th scope="col" width="20px" style="text-align:center;">No</th>
                        <th scope="col" width="220px" style="text-align:center;">Nama OPD </th>
                        <th scope="col" width="200px" style="text-align:center;">Alamat</th>
                        <th scope="col" width="180px" style="text-align:center;">No Tlp/Fax</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @php $i=1 @endphp
                        @foreach ($profile as $data)
                        <td style="text-align:center;">{{$i++}}</td>
                        <td>{!! $data->nama_opd!!}</td>
                        <td>{!!$data->alamat!!}</td>
                        <td>{!!$data->telepon!!}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
        </div>
          </div><!-- post-body end -->
        </div><!-- 1st post end -->


      </div><!-- Content Col end -->

      <div class="col-lg-4">

<div class="sidebar sidebar-right">
  <div class="sidebar-item search-form">
    <h3 class="widget-title" style="margin-left:20px;">Search</h3>
        <form action="{{ route('reader.search.berita') }}" method="POST"  class="mt-3" style="margin-left:20px;">
          @csrf
            <input type="text" value="{{ old('cari') }}" name="cari" style="padding-right:10px; padding-left:10px;">  
              <input type="submit" value="Search" style="color:white;"><i class="bi bi-search"></i></input>
        </form>
  </div><!-- End sidebar search formn-->
  <br>
  <div class="widget recent-posts">
  <h3 class="widget-title">Berita Terkini</h3>
    <ul class="list-unstyled">
        @foreach($beritaterkini as $data)
      <li class="d-flex align-items-center">
        <div class="posts-thumb">
          <a href="#"><img loading="lazy" alt="img" src="{{ route('menu.file', encrypt($data->thumbnail)) }}"></a>
        </div>
        <div class="post-info">
          <h4 class="entry-title">
          <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
            <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}">{{  $data->judul }}</a>
          </h4>
        </div>
      </li><!-- 1st post end-->
      @endforeach
    </ul>

  </div><!-- Recent post end -->

  <div class="widget">
    <h3 class="widget-title">Kategori</h3>
    <ul class="arrow nav nav-tabs">
    @foreach($categories as $kategori)
        <li><a href="{{ route('contents_kategori', $kategori->slug) }}">{{ $kategori->nama_kategori }} <span>({{ $kategori->posts->count() }})</span></a></li>
    @endforeach
    </ul>
</div>
<!-- Categories end -->
    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection

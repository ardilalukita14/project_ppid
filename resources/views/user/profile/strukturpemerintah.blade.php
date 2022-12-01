@extends('layouts.frontend.appnew')
@extends('layouts.frontend.konten')
@section('content')


  <div class="body-inner">

    @include('layouts.frontend.topbar')
    <!--/ Topbar end -->
<!-- Header start -->
@include('layouts.frontend.header')
<!--/ Header end -->

<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/news/balkot.png')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Profil</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Pemerintah Kota Madiun</a></li>
                      <li class="breadcrumb-item"><a href="#">Bagan Struktur Organisasi Pemerintah Kota Madiun</a></li>
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
              @if($profile != null)
                <a href="news-single.html"><h2 style="margin-top:-35px;">{{$profile->title}}</h2></a>
              </h1>
            </div><!-- header end -->

            <div class="entry-content">
              <p style="margin-top:32px;">{!! $profile->deskripsi !!}</p>
              @else
            <p style="text-align: center" data-aos="fade-in">Informasi tidak ditemukan</p>
          @endif

              @foreach($berkas as $data)
              @if ($data->jenis_file == "gambar")
              <hr>
              <div class="sidebar sidebar-right">
              <div class="widget recent-posts">
                <h3 class="widget-title" style="margin-left:-20px; font-size: 25px;">Lampiran</h3>
              </div>
            </div>
              <img src="{{ route('menu.file', encrypt($data->path_file)) }}" class="img-fluid" style="width: 100%;">
               @endif
               @endforeach
               <br>

              @foreach($berkas as $data)
              @if ($data->jenis_file == "lampiran")
              <hr>
                <iframe src="{{ route('menu.file', encrypt($data->path_file)) }}" name="iframe_a"  width="100%" height="600" style="border:1px solid black;"></iframe> <br><br>
                <a href="{{ route('menu.file', encrypt($data->path_file)) }}" target="_blank"> <button  class="btn btn-info" style="border-radius: 20px;" >Download File</button></a><br><br>
              @endif
              @endforeach

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
<!-- Categories end --><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection

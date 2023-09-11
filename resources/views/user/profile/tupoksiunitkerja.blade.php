@extends('layouts.frontend.appnew')

@section('content')


  <div class="body-inner">

    @include('layouts.frontend.topbar')
    <!--/ Topbar end -->
<!-- Header start -->
@include('layouts.frontend.header')
<!--/ Header end -->

<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/news/berita2.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Profil</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Pemerintah Kota Madiun</a></li>
                      <li class="breadcrumb-item"><a href="#">Tupoksi Unit Kerja</a></li>
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

      <div class="col-lg-12 mb-5 mb-lg-0">
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
            <!-- <a href="{{route('menu.file', encrypt($data->path_file))}}" target="_blank" style="color: blue;">{{$data->path_file}}</a> -->
              <img src="{{ route('menu.file', encrypt($data->path_file)) }}" class="img-fluid" style="width: 100%;">
               @endif
               @endforeach
               <br>

              @foreach($berkas as $data)
              @if ($data->jenis_file == "lampiran")
              <hr>
              <!-- <a href="{{route('menu.file', encrypt($data->path_file))}}" target="_blank" style="color: blue;">{{$data->path_file}}</a> -->
                <iframe src="{{ route('menu.file', encrypt($data->path_file)) }}" name="iframe_a"  width="100%" height="600" style="border:1px solid black;"></iframe> <br><br>
                <a href="{{ route('menu.file', encrypt($data->path_file)) }}" target="_blank"> <button  class="btn btn-info" style="border-radius: 20px;" >Download File</button></a><br><br>
              @endif
              @endforeach

            </div>
          </div><!-- post-body end -->
        </div><!-- 1st post end -->


      </div><!-- Content Col end -->

     
  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection

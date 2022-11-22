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
                <a href="news-single.html"><h2 style="margin-top:-35px;">{{$profile->title}}</h2></a>
              </h1>
            </div><!-- header end -->

            <div class="entry-content">
              <p style="margin-top:32px;">{!! $profile->deskripsi !!}</p>
            </div>

          </div><!-- post-body end -->
        </div><!-- 1st post end -->

       
      </div><!-- Content Col end -->

      @include('layouts.frontend.sidebarkonten')<!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection

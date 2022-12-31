@extends('layouts.frontend.appnew')
@section('content')


  <div class="body-inner">

    @include('layouts.frontend.topbar')
    <!--/ Topbar end -->

<!-- Header start -->
@include('layouts.frontend.header')
<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">
  @foreach($carousel as $data)
<div class="banner-carousel-item" style="background-image:url({{ route('menu.file', encrypt($data->icon)) }})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h3 class="into-sub-title" data-animation-in="fadeIn">{{$data->judul}}</h3>
                <h6 class="slide-title" data-animation-in="slideInLeft">{{$data->subjudul}}</h6>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="https://www.madiunkota.go.id/" class="slider btn btn-primary" style="align:center">Lihat</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>
@endforeach
  </div>
</div>

<!-- Content Pertama-->
@include('layouts.frontend.content2')

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h8 class="into-sub-title" style="font-size: 36px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: -0.5px; color: #212121; font-weight: 700; font-family: Montserrat, sans-serif;
                text-rendering: optimizeLegibility;">PPID KOTA MADIUN</h8>
              <p style="text-align:justify; width: 550px; margin-top: 30px;">Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan,
                  pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.</p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title" style="color: #555; text-align:justify;">Menyediakan informasi yang dibutuhkan publik</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title" style="color: #555; text-align:justify;">Meningkatkan pengelolaan dan pelayanan informasi</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title" style="color: #555; text-align:justify;">Membangun dan mengembangkan sistem informasi penyediaan dan layanan informasi</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title" style="color: #555; text-align:justify;">Meningkatkan kompetensi sumberdaya manusia</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        {{-- <div class="col-lg-6 mt-4 mt-lg-0">
                <div id="gpr-kominfo-widget-container">
                    <div class="card-body">
                        <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                    </div>
                </div> --}}

    </div>
        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<hr>
<!-- Content Kedua-->
<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
      <div class="shuffle-btn-group" style="margin-top:-20px;">
        <h3 class="section-sub-title" style="text-align:center; color: #091E3E">Berita Tersemat</h3>
          </div><!-- project filter end -->
      </div>
    </div>

    <div class="row">
     @foreach($beritapinned as $data)
      <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                <?php if($data->thumbnail == null ){ ?>
                    <img loading="lazy" class="img-fluid" src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}" class="img-fluid" alt="Gambar Default" style="width:800px; height:400px; text-align: center;">
                  <?php }else{ ?>
                    <img loading="lazy" class="img-fluid" class="img-fluid" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" alt="img" style="width:400px; height:250px;">
                  <?php } ?>
                  </a>
              </div>
                <div >
                <small class="me-3"><i class="far fa-user fa-1x text-primary"></i>  {{$data->users->name}}</small>
                  <small style="margin-left:10px;"><i class="far fa-calendar-alt text-primary me-2"></i> {{ date('d M Y', strtotime($data->tgl_post)) }}</small>
                  <small style="margin-left:10px;"><i class="far fa-folder-open text-primary"></i>  {{$data->kategori->nama_kategori}}</small>
                </div>
              <div class="post-body">
                <h4 class="post-title">
                <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}" class="d-inline-block">{{$data->judul}}</a>
                </h4>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->
        @endforeach
    </div>
    <!--/ Content row end -->
    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="{{ route('contents_kategori', 'berita-ppid') }}">Berita Lainnya</a>
    </div>

  </div>
  <!--/ Container end -->
</section>

<br></br>
<!-- Content Kedua-->
@include('layouts.frontend.content3')



<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
      <div class="shuffle-btn-group" style="margin-top:-20px;">
        <h3 class="section-sub-title" style="text-align:center; color: #091E3E">Penghargaan</h3>
          </div><!-- project filter end -->
      </div>
    </div>
    <!--/ Title row end -->

    {{-- <div class="row">
      <div class="col-12">

        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>
      @foreach($beritakonten as $data)

          <div class="col-lg-4 col-md-6 shuffle-item">
          <div class="project-img-container">
            <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
              <a class="gallery-popup" href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}" aria-label="project-img">
                <img class="img-fluid" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" alt="project-img" style="width:400px; height:250px;">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}">{{  $data->judul }}</a>
                  </h3>
                  <p class="project-cat">{{$data->kategori->nama_kategori}}</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
          @endforeach
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="{{ route('contents_kategori', 'berita-ppid') }}">Berita Lainnya</a>
        </div>
      </div>

    </div>
     --}}

     <div class="row">
     <div class="col-6 col-md-12 col-lg-12">
        <div class="card" style="height: 400px; background-color:#a9b5f8">
          {{-- <div class="card-header">
            <h4>Caption</h4>
          </div> --}}
          <div class="card-body">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <img class="d-block"src="backend2/assets/img/news/img01.jpg" style="width: 500px; margin-left: 260px" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="backend2/assets/img/news/img07.jpg" style="width: 500px; margin-left: 260px" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="backend2/assets/img/news/img08.jpg" style="width: 500px; margin-left: 260px" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    <!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3 style="color: #ffffff; font-weight:bold;">Temukan Informasi</h3>
              <h4>Yang Anda Inginkan...</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
      <div class="shuffle-btn-group" style="margin-top:-20px;">
        <h3 class="section-sub-title" style="text-align:center; color: #091E3E">Berita Terkini</h3>
          </div><!-- project filter end -->
      </div>
    </div>

    <div class="row">
    @foreach($beritaterkini as $data)
    <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" alt="img" style="width:400px; height:250px;">
                </a>
              </div>
                <div >
                <small class="me-3"><i class="far fa-user fa-1x text-primary"></i>  {{$data->users->name}}</small>
                  <small style="margin-left:10px;"><i class="far fa-calendar-alt text-primary me-2"></i> {{ date('d M Y', strtotime($data->tgl_post)) }}</small>
                  <small style="margin-left:10px;"><i class="far fa-folder-open text-primary"></i>  {{$data->kategori->nama_kategori}}</small>
                </div>
              <div class="post-body">
                <h4 class="post-title">
                <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}" class="d-inline-block">{{$data->judul}}</a>
                </h4>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->
        @endforeach
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="{{ route('contents_kategori', 'berita-ppid') }}">Berita Lainnya</a>
    </div>

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->


@include('layouts.frontend.footer')
<!-- Footer end -->

@endsection


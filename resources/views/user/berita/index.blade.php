@extends('layouts.frontend.appnew')
@extends('layouts.frontend.konten')
@section('content')


  <div class="body-inner">

    @include('layouts.frontend.topbar')
    <!--/ Topbar end -->

<!-- Header start -->
@include('layouts.frontend.header')
<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">
<div class="banner-carousel-item" style="background-image:url(frontend/images/news/berita3.jpg)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h3 class="into-sub-title" data-animation-in="fadeIn">Website Resmi PPID</h3>
                <h6 class="slide-title" data-animation-in="slideInLeft">Pemerintah Kota Madiun</h6>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="https://www.madiunkota.go.id/" class="slider btn btn-primary" style="align:center">Lihat</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('frontend/images/news/berita2.jpg')}})">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">Pemerintah Kota Madiun</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Website Resmi PPID</h3>
                <p data-animation-in="slideInRight">
                  <a href="https://www.madiunkota.go.id/" class="slider btn btn-primary" aria-label="contact-with-us">Lihat</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('frontend/images/news/berita.jpg')}})">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Website Resmi PPID</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">Pemerintah Kota Madiun</p>
                <div data-animation-in="slideInLeft">
                    <a href="https://www.madiunkota.go.id/" class="slider btn btn-primary" aria-label="contact-with-us">Lihat</a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- Content Pertama-->
@include('layouts.frontend.content2')

<!-- Content Kedua-->
<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h2 class="section-title" style="text-align:center;">Informasi Terkait</h2>
        <h3 class="section-sub-title" style="text-align:center;">Berita Tersemat</h3>
      </div>
      @foreach($beritapinned as $data)
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
              <?php if($data->thumbnail == null ){ ?>
                    <img loading="lazy" src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}" class="img-fluid" alt="Gambar Default" style="width:400px; height:250px;">
                
                <?php }else{ ?>
                        <img loading="lazy" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" alt="Gambar Content" class="img-fluid" style="width:400px; height:200px; text-align: center;">
                <?php } ?>

              </div>
              <div class="d-flex">
                <div class="ts-service-box-img">
                    <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon1.png')}}" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                <h3 class="service-box-title" style="text-align:justify;">
                    <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
                    <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}">{{  $data->judul }}</a>
                  </h3>
                <h8 style="text-align:justify;">
                <span class="post-author">
                  <a href="#"> {{$data->users->name}} |</a>
                </span>
                <span class="post-cat">
                  <a href="#"> {{$data->kategori->nama_kategori}}|</a>
                </span>
                <span class="post-comment">
                  <a href="#" class="comments-link"> {{ date('d M Y', strtotime($data->tgl_post)) }}</a></span>
                </h8> 
                <p>{!!$data->contents!!}</p>
                    <a class="learn-more d-inline-block" style="text-align:justify;" href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}"  aria-label="service-datas"><i class="fa fa-caret-right"></i> Selanjutnya</a>
                </div>
              </div>
          </div><!-- Service1 end -->
        </div><!-- Col 1 end -->
        @endforeach
    </div><!-- Content row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<!-- Content Kedua-->
@include('layouts.frontend.content3')



<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
      <div class="shuffle-btn-group" style="margin-top:-20px;">
        <h2 class="section-title">Informasi Terkait</h2>
        <h3 class="section-sub-title">Daftar Berita</h3>
          </div><!-- project filter end -->
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
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

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Temukan Informasi</h3>
              <h4>Yang Anda Inginkan...</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Search</h4>
                <p class="text-white">Informasi yang dibutuhkan</p>
              </div>

              <div class="col-md-7 newsletter-form">
                 <form action="{{ route('reader.search.berita') }}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Search Berita</label>
                      <input type="text" value="{{ old('cari') }}" name="cari" class="form-control form-control-lg" placeholder="Search berita" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Informasi Terkait</h2>
          <h3 class="section-sub-title">Berita Terkini</h3>
        </div>
    </div>
    <!--/ Title row end -->

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
              <div class="post-body">
                <h4 class="post-title">
                    <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}" class="d-inline-block">{{$data->judul}}</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> {{ date('d M Y', strtotime($data->tgl_post)) }}
                    </span>
                </div>
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


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
                    <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon3.png')}}" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                <h3 class="service-box-title" style="width:300px;">
                    <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
                    <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}">{{  $data->judul }}</a>
                  </h3>
                  <h8 style="width:150px;">
                <span class="post-author">
                  <a href="#"> {{$data->users->name}} |</a>
                </span>
                <span class="post-cat">
                  <a href="#"> {{$data->kategori->nama_kategori}}|</a>
                </span>
                <span class="post-comment">
                  <a href="#" class="comments-link"> {{ date('d M Y', strtotime($data->tgl_post)) }}</a></span>
                </h8>
                  <p style="width:300px;">{!! $data->contents !!}...</p>
                    <a class="learn-more d-inline-block" href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}"  aria-label="service-datas"><i class="fa fa-caret-right"></i> Selanjutnya</a>
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
          <a class="btn btn-primary" href="{{ route('contents_kategori', 'berita') }}">Berita Lainnya</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                      view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                      subline of her own road.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="frontend/images/clients/testimonial1.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Gabriel Denis</h3>
                          <span class="quote-subtext">Chairman, OKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi aliquip consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="frontend/images/clients/testimonial2.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Weldon Cash</h3>
                          <span class="quote-subtext">CFO, First Choice</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi ut commodo consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="frontend/images/clients/testimonial3.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Minter Puchan</h3>
                          <span class="quote-subtext">Director, AKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="frontend/images/clients/client1.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="frontend/images/clients/client2.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="frontend/images/clients/client3.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="frontend/images/clients/client4.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="frontend/images/clients/client5.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="frontend/images/clients/client6.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+9) 847-291-4353</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
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
        <a class="btn btn-primary" href="{{ route('contents_kategori', 'berita') }}">Berita Lainnya</a>
    </div>

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->

@include('layouts.frontend.footer')
<!-- Footer end -->

@endsection


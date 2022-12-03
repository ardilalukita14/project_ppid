@extends('layouts.frontend.appnew')
@extends('layouts.frontend.konten')
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
                <h1 class="banner-title">Kategori Informasi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Pemerintah Kota Madiun</a></li>
                      <li class="breadcrumb-item"><a href="#">Informasi Terkait</a></li>
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

      <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
        <div class="blog-item bg-light rounded overflow-hidden">
            <div class="blog-img position-relative overflow-hidden">
                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
            </div>
            <div class="p-4">
                <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                </div>
                <h4 class="mb-3">How to build a website</h4>
                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

      @if ($posts != null)
      <div class="col-lg-8 row g-5">
        @foreach ($posts as $beritaItem)
        <div class="post">
          <div class="post-media post-image">
            <?php if($beritaItem->thumbnail == null ){ ?>
              <img loading="lazy" src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}" class="img-fluid" alt="Gambar Default">

          <?php }else{ ?>
                  <img loading="lazy" src="{{ route('menu.file', encrypt($beritaItem->thumbnail)) }}" alt="Gambar Content" class="img-fluid" style="width:800px; height:400px; text-align: center;">
          <?php } ?>
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> {{ $beritaItem->users->name }}</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> {{ $beritaItem->kategori->nama_kategori }}</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> {{ date('d M Y', strtotime($beritaItem->tgl_post)) }}</span>
                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>
              </div>
              <h2 class="entry-title">
                <h6 class="title">
                  <?php $date = DateTime::createFromFormat("Y-m-d", $beritaItem->tgl_post);?>
                  <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$beritaItem->slug] ) }}">{{  $beritaItem->judul }}</a>
                </h6>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <p style="margin-top: -20px;">{!!substr($beritaItem->contents,0,1000)!!}...</p>
            </div>

            <div class="post-footer">
              <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$beritaItem->slug] ) }}" class="btn btn-primary">Baca Lebih Lanjut</a>
            </div>

          </div><!-- post-body end -->
        </div><!-- 1st post end -->
        @endforeach

        <div class="blog-pagination">
          {{ $posts->links() }}
      </div>

      </div>
      @else
       <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="post">
            <p style="text-align: center" data-aos="fade-in">Hasil pencarian berita tidak ditemukan</p>
                </div>
                </div>
        @endif

        <div class="col-lg-4">

          <div class="sidebar sidebar-right">
            <div class="sidebar-item search-form">
              <h3 class="widget-title" style="margin-left:20px;">Search</h3>
                  <form action="{{ route('reader.search.berita') }}" method="POST"  class="mt-3" style="margin-left:20px;">
                    @csrf
                      <input type="text" value="{{ old('cari') }}" name="cari" style="padding-right:10px; padding-left:10px;">
                        <input type="submit" value="Search" style="color:white;"><i class="bi bi-search"></i></input>
                  </form>
            </div>
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
                </li>
                @endforeach
              </ul><!-- 1st post end-->

            </div><!-- Recent post end -->

            <div class="widget">
              <h3 class="widget-title">Kategori</h3>
              <ul class="arrow nav nav-tabs">
                @foreach($categories as $kategori)
                <li><a href="{{ route('contents_kategori', $kategori->slug) }}">{{ $kategori->nama_kategori }} <span>({{ $kategori->posts->count() }})</span></a></li>
              @endforeach
              </ul>
            </div><!-- Categories end -->

          </div><!-- Sidebar end -->
        </div>

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection


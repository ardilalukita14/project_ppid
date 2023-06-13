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


    @if (count($posts) != 0)
      <div class="col-lg-8 row g-5">
        @foreach ($posts as $beritaItem)
        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
        <div class="post">
          <div class="post-media post-image">
            <?php if($beritaItem->thumbnail == null ){ ?>
              <img loading="lazy" src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}" class="img-fluid" alt="Gambar Default">

          <?php }else{ ?>
                  <img loading="lazy" src="{{ route('menu.file', encrypt($beritaItem->thumbnail)) }}" alt="Gambar Content" class="img-fluid" style="width:400px; height:200px; text-align: center;">
          <?php } ?>
          </div>
        </div>

          <div class="post-body" style="background-color: #EEF9FF;">
            <div class="entry-header">
              <div class="post-meta">
                {{-- <small class="post-author">
                  <i class="far fa-user text-primary me-2"></i><a href="#" style="font-size: 12px;">{{ $beritaItem->users->name }}</a>
                </small>
                <small class="post-cat">&nbsp;
                  <i class="far fa-folder-open text-primary me-2"></i><a href="#" style="font-size: 12px;">{{ $beritaItem->kategori->nama_kategori }}</a>
                </small>&nbsp;
                <small class="post-meta-date"><i class="far fa-calendar-alt text-primary me-2"></i><a href="#" style="font-size: 12px;">{{ date('d M Y', strtotime($beritaItem->tgl_post)) }}</a></small>&nbsp; --}}
                <small class="me-3"><i class="far fa-user fa-1x text-primary"></i>  {{ $beritaItem->users->name }}</small>
                <small style="margin-left:10px;"><i class="far fa-calendar-alt text-primary me-2"></i> {{ date('d M Y', strtotime($beritaItem->tgl_post)) }}</small>
                <small style="margin-left:10px;"><i class="far fa-folder-open text-primary"></i>  {{ $beritaItem->kategori->nama_kategori }}</small>
            </div>
              <h2 class="entry-title" >
                <h6 class="title" style="margin-left: 15px; margin-right:15px;">
                  <?php $date = DateTime::createFromFormat("Y-m-d", $beritaItem->tgl_post);?>
                  <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$beritaItem->slug] ) }}">{{  $beritaItem->judul }}</a>
                </h6>
              </h2>
            </div><!-- header end -->

            <div class="entry-content" style="margin-left: 15px; margin-right:15px">
              <p style="margin-top: -20px;">{!!substr($beritaItem->contents,0,1000)!!}...</p>
            </div>

            <div class="post-footer" style="margin-left: 15px; margin-right:15px">
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
            <p style="text-align: center" data-aos="fade-in">Berita tidak ditemukan</p>
                </div>
                </div>
        @endif

        <div class="col-lg-4">

          <div class="sidebar sidebar-right">
            <div class="sidebar-item search-form">
              <h3 class="widget-title" style="margin-left:20px;">Search</h3>
                  <form action="{{ route('reader.search.berita') }}" method="GET"  class="mt-3" style="margin-left:20px;">
                    @csrf
                      <input type="text" value="{{ old('cari') }}" name="cari" style="padding-right:10px; padding-left:10px;">
                        <input type="submit" value="Search" style="color:rgb(105, 175, 223);"><i class="bi bi-search"></i></input>
                  </form>
            </div>
            <br>

            <div class="widget recent-posts">
                <h3 class="widget-title">Berita Terkini</h3>
                @foreach($beritaterkini as $data)
              <li class="d-flex align-items-center" style="background-color: #EEF9FF;">
                <div class="posts-thumb">
                <?php if($data->thumbnail == null ){ ?>
                    <img loading="lazy" src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}" class="img-fluid" alt="Gambar Default" style="width:800px; height:400px; text-align: center;">
                  <?php }else{ ?>
                  <a href="#"><img loading="lazy" alt="img" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" style="width: 100px; height: 100px; object-fit: cover;"></a>
                  <?php } ?>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                  <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
                    <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}">{{  $data->judul }}</a>
                  </h4>
                </div>
              </li><!-- 1st post end-->
              <br>
              @endforeach
              </ul><!-- 1st post end-->

            </div><!-- Recent post end -->

            <div class="widget widget-tags">
            <h3 class="widget-title">Kategori</h3>
            <div class="d-flex flex-wrap m-n1" >
            <ul class="list-unstyled">
            @foreach($categories as $kategori)
                <li><a href="{{ route('contents_kategori', $kategori->slug) }}">{{ $kategori->nama_kategori }} <span>({{ $kategori->posts->count() }})</span></a></li>
            @endforeach
              </ul>
        </div>
        <!-- Categories end -->
        </div>
                    <!-- Tags End -->

        <div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
            @foreach($tags as $tag)
              <li><a href="#">{{ $tag->jenis_tag }}</a></li>
              @endforeach
            </ul>
          </div><!-- Tags end -->
          </div><!-- Sidebar end -->
        </div>

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection


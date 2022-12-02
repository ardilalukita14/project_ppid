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
      
        @if ($posts != null)
      <div class="col-lg-8 mb-5 mb-lg-0">
       @foreach ($posts as $beritaItem)
        <div class="post">
          <div class="post-media post-image">
                <?php if($beritaItem->thumbnail == null ){ ?>
                    <img loading="lazy" src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}" class="img-fluid" alt="Gambar Default">
                
                <?php }else{ ?>
                        <img loading="lazy" src="{{ route('menu.file', encrypt($beritaItem->thumbnail)) }}" alt="Gambar Content" class="img-fluid" style="width:800px; height:400px; text-align: center;">
                <?php } ?>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> {{ $beritaItem->users->name }}</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> {{ $beritaItem->kategori->nama_kategori }}</a>
                </span>
                <span class="post-comment"><i class="far fa-calendar"></i> {{ date('d M Y', strtotime($beritaItem->tgl_post)) }}</span>
              </div>
              <h2 class="entry-title">
                  <h6 class="title">
                    <?php $date = DateTime::createFromFormat("Y-m-d", $beritaItem->tgl_post);?>
                    <a href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$beritaItem->slug] ) }}">{{  $beritaItem->judul }}</a>
                  </h6>
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
            </div><!-- End blog pagination -->
     
      </div><!-- Content Col end -->  
          </div><!-- Content Col end -->
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


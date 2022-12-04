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

    @if (count($posts) != 0)
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
            <p style="text-align: center" data-aos="fade-in">Berita tidak ditemukan</p>
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

            <div class="widget">
            <h3 class="widget-title">Kategori</h3>
            <div class="d-flex flex-wrap m-n1" >
            @foreach($categories as $kategori)
            <a href="{{ route('contents_kategori', $kategori->slug) }}" class="btn btn-light m-1" style="background-color: #EEF9FF;">{{ $kategori->nama_kategori }} <span>({{ $kategori->posts->count() }})</span></a></li>
            @endforeach
        </div>
        <!-- Categories end -->
        </div>
                  <div class="widget">
                      <h3 class="widget-title">Tag</h3>
                        <div class="d-flex flex-wrap m-n1" style="background-color: #EEF9FF;">
                          @foreach($tags as $tag) 
                            <a href="" class="btn btn-light m-1" style="background-color: #EEF9FF;">{{ $tag->jenis_tag }}</a>
                          @endforeach
                        </div>
                    </div>
                    <!-- Tags End -->
          </div><!-- Sidebar end -->
        </div>

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 @include('layouts.frontend.footer')<!-- Footer end -->

@endsection


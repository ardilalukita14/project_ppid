@extends('layouts.frontend.appnew')
@section('content')
<div class="body-inner">
	<!-- @include('layouts.frontend.topbar') -->
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
							<h3 class="into-sub-title" data-animation-in="fadeIn" style="color: rgb(255, 255, 255) !important;
								-webkit-text-stroke: 1px rgb(74, 109, 165);
								text-shadow: 0px 2px 4px rgb(255, 255, 255);">{{  $data->judul }}</h3>
							<h6 class="slide-title" data-animation-in="slideInLeft">{{ $data->subjudul }}</h6>
							<!-- <p data-animation-in="slideInLeft" data-duration-in="1.2">
								<a href="https://www.madiunkota.go.id/" class="slider btn btn-primary" style="align:center">Lihat</a>
								</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- Content Pertama111-->
@include('layouts.frontend.content2')
<section id="ts-features" class="ts-features">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="ts-intro">
					<h8 class="into-sub-title" style="font-size: 36px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: -0.5px; color: #212121; font-weight: 700; font-family: Montserrat, sans-serif;
						text-rendering: optimizeLegibility;">PPID KOTA MADIUN</h8>
					<p style="text-align:justify; margin-top: 30px;">Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan,
						pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.
					</p>
				</div>
				<!-- Intro box end -->
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
						</div>
						<!-- Service 1 end -->
					</div>
					<!-- col end -->
					<div class="col-md-6">
						<div class="ts-service-box">
							<span class="ts-service-icon">
							<i class="fas fa-sliders-h"></i>
							</span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title" style="color: #555; text-align:justify;">Meningkatkan pengelolaan dan pelayanan informasi</h3>
							</div>
						</div>
						<!-- Service 2 end -->
					</div>
					<!-- col end -->
				</div>
				<!-- Content row 1 end -->
				<div class="row">
					<div class="col-md-6">
						<div class="ts-service-box">
							<span class="ts-service-icon">
							<i class="fas fa-thumbs-up"></i>
							</span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title" style="color: #555; text-align:justify;">Membangun dan mengembangkan sistem informasi penyediaan dan layanan informasi</h3>
							</div>
						</div>
						<!-- Service 1 end -->
					</div>
					<!-- col end -->
					<div class="col-md-6">
						<div class="ts-service-box">
							<span class="ts-service-icon">
							<i class="fas fa-users"></i>
							</span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title" style="color: #555; text-align:justify;">Meningkatkan kompetensi sumberdaya manusia</h3>
							</div>
						</div>
						<!-- Service 2 end -->
					</div>
					<!-- col end -->
					<a href="/ppid-pelaksana-kota-madiun" class="col-md-12 mx-2 text-center p-3" style="background-color:#687ffa">
                <span class="ts-service-icon">
								  <i class="fas fa-briefcase"></i>
								</span>
                <br />
            <h8 class="into-sub-title text-white" style="font-size:24px; font-color: #ffff;">PPID Pelaksana</h8>
						<!-- <div class="col-md-12" style="background-color:#687ffa">
							<center> <span class="ts-service-icon">
								<i class="fas fa-briefcase"></i>
								</span>
							</center>
							<center>
								<h8 class="into-sub-title text-white" style="font-size:24px; font-color: #ffff;">PPID Pelaksana</h8>
							</center>
						</div> -->
					</a>
				</div>
				<!-- Content row 1 end -->
			</div>
			<!-- Col end -->
			<div class="col-lg-6 mt-4 mt-lg-0">
				<div id="gpr-kominfo-widget-container">
					<div class="card-body">
						<!-- <script type="text/javascript" async src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> -->
						<script type="text/javascript" async src="{{ asset ('frontend/js/widget.kominfo.go.id_gpr-widget-kominfo.min.js')}}"></script>
					</div>
				</div>
			</div>
		</div>
		<!-- Col end -->
	</div>
	<!-- Row end -->
	</div><!-- Container end -->
</section>
<!-- Feature are end -->
<section class="subscribe no-padding" style="  background: rgb(0 30 51)">
  <div class="container">
  <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton pt-5 pb-5">
            <h4 style="color: #ffffff; font-weight:bold;">Pengajuan</h4>
            <h4 style="color: #ffffff; font-weight:bold;">Informasi Publik</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="row">
              <div class="col-md-6 mt-3">
                  <div class="text-center">
                      <a href="/permohonan-informasi/create" target="_blank">
													<img
														loading="lazy"
														src="{{ asset('img/evaluation.png') }}"
														alt="facts-img"
														style="height:70px;width:auto;" />

                          <h3 class="pt-4" style="color: #ffffff; font-size: 12px;">Form Permohonan Informasi Publik</h3>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 mt-3">
                <div class="text-center">
                      <a href="pengajuan-keberatan/create" target="_blank">
													<img
														loading="lazy"
														src="{{ asset('img/report.png') }}"
														alt="facts-img"
														style="height:70px;width:auto;" />

                          <h3 class="pt-4" style="color: #ffffff; font-size: 12px;">Form Pengajuan Keberatan Informasi Publik</h3>
                      </a>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 mt-3">
                  <div class="text-center">
                      <a href="{{ route('cekstatus.permohonan') }}">
													<img
														loading="lazy"
														src="{{ asset('img/checklist.png') }}"
														alt="facts-img"
														style="height:70px;width:auto;" />

                          <h3 class="pt-4" style="color: #ffffff; font-size: 12px;">Cek Status Permohonan Informasi</h3>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 mt-3">
                <div class="text-center">
                      <a href="{{ route('cekstatus.keberatan') }}" target="_blank">
													<img
														loading="lazy"
														src="{{ asset('img/verified.png') }}"
														alt="facts-img"
														style="height:70px;width:auto;" />

                          <h3 class="pt-4" style="color: #ffffff; font-size: 12px;">Cek Status Pengajuan
											Keberatan Informasi Publik</h3>
                      </a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 mt-3">
                  <div class="text-center">
                      <a href="{{ route('statistik.menu') }}">
													<img
														loading="lazy"
														src="{{ asset('img/statistics.png') }}"
														alt="facts-img"
														style="height:70px;width:auto;" />

                          <h3 class="pt-4" style="color: #ffffff; font-size: 12px;">Statistik
											Layanan Informasi Publik</h3>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 mt-3">
                <div class="text-center">
                      <a href="{{ route('kanalpengaduan.menu') }}">
													<img
														loading="lazy"
														src="{{ asset('img/qa.png') }}"
														alt="facts-img"
														style="height:70px;width:auto;" />

                          <h3 class="pt-4" style="color: #ffffff; font-size: 12px;">Kanal
											Pengaduan Resmi PPID Kota Madiun</h3>
                      </a>
                  </div>
              </div>
          </div>
        </div><!-- Col end -->
    </div>
  </div>
	<!--/ Container end -->
</section>
<!--/ subscribe end -->
<section class="call-to-action no-padding" style="  background: #23437f">
	<div class="container">
		<div class="action-style-box">
			<div class="row">
				<div class="col-md-8 text-center text-md-left ">
					<div class="call-to-action-text">
						<h3 class="action-title">TRANSPARANSI ANGGARAN KOTA MADIUN</h3>
					</div>
				</div>
				<!-- Col end -->
				<div class="col-md-4 text-center text-md-right mt-3 mt-md-0 newsletter-introtext">
					<div class="call-to-action-btn">
						<a class="btn btn-primary"
							href="{{ route('menu.transparansianggaran.madiun') }}">Transparansi
						Anggaran<i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row end -->
		</div>
		<!-- Action style box -->
	</div>
	<!-- Container end -->
</section>
<!-- Action end -->
<!-- Content Kedua-->
<section id="project-area" class="project-area solid-bg">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<div class="shuffle-btn-group" style="margin-top:-20px;">
					<h3 class="section-sub-title" style="text-align:center; color: #091E3E">Berita Tersemat</h3>
				</div>
				<!-- project filter end -->
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
						<img loading="lazy" class="img-fluid" class="img-fluid" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" alt="img">
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
				</div>
				<!-- Latest post end -->
			</div>
			<!-- 1st post col end -->
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
				</div>
				<!-- project filter end -->
			</div>
		</div>
		<!--/ Title row end -->
		{{-- 
		<div class="row">
			<div class="col-lg-12">
				<div class="row shuffle-wrapper">
					<div class="col-1 shuffle-sizer"></div>
					@foreach($beritakonten as $data)
					<div class="col-lg-4 col-md-6 shuffle-item">
						<div class="project-img-container">
							<?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
							<a class="gallery-popup" href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}" aria-label="project-img">
							<img class="img-fluid" src="{{ route('menu.file', encrypt($data->thumbnail)) }}" alt="project-img">
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
					</div>
					<!-- shuffle item 1 end -->
					@endforeach
				</div>
				<!-- shuffle end -->
			</div>
			<div class="col-12">
				<div class="general-btn text-center">
					<a class="btn btn-primary" href="{{ route('contents_kategori', 'berita-ppid') }}">Berita Lainnya</a>
				</div>
			</div>
		</div>
		--}}
		<div class="row">
			<div class="col-md-6 col-lg-12">
				<div class="card" style="height: 400px; background-color:#525c92">
					{{-- 
					<div class="card-header">
						<h4>Caption</h4>
					</div>
					--}}
					<div class="your-class">
						@foreach($penghargaan as $data)
						<div class="your-class-item text-white">
							<img loading="lazy" class="img-fluid" src="{{ route('menu.file', encrypt($data->icon)) }}" 
								class="img-fluid" alt="Gambar Default" style="height:300px; text-align: center;">
							{!! $data->judul !!}
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!-- Project area end -->
@foreach($youtube as $data)
<section id="facts" class="facts-area dark-bg">
	<div class="container">
		<center>
			<h1>{{$data->judul}}</h1>
		</center>
		<center>
			<p>{!!$data->content!!}</p>
		</center>
		<div class="facts-wrapper">
			<div class="row">
				<div class="center">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal">
					  <iframe src="{{$data->link}}" frameborder="0" gesture="media" allowfullscreen width="850" height="480" style="aspect-ratio: 16 / 9;
  width: 100%;"></iframe>
					</button>
					<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      <h4 class="modal-title" id="myModalLabel"></h4>
						    </div>
						    <div class="modal-body">
						        <div class="embed-responsive embed-responsive-16by9">
						            <iframe src="{{$data->link}}" frameborder="0" allowfullscreen></iframe>
						      </div>
						    </div>
						    <div class="modal-footer">
						      <button type="button" class="btn btn-default" data-dismiss="modal"></button>
						    </div>
						  </div>
						</div>
						</div> -->
				</div>
				<!-- Facts end -->
			</div>
			<!--/ Content row end -->
		</div>
	</div>
	<!--/ Container end -->
</section>
<!-- Facts end -->
@endforeach
<section id="project-area" class="project-area solid-bg">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<div class="shuffle-btn-group" style="margin-top:-20px;">
					<h3 class="section-sub-title" style="text-align:center; color: #091E3E">Berita Terkini</h3>
				</div>
				<!-- project filter end -->
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
				</div>
				<!-- Latest post end -->
			</div>
			<!-- 1st post col end -->
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
@include('layouts.frontend.contact')
@include('layouts.frontend.footer')
<!-- Footer end -->
@endsection
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
                <h1 class="banner-title">Form Informasi Publik</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<div class="breadcrumbs" style="background-color: #EEF9FF; height: 90px;">
        <div class="container" >
            <br>

            <div class="d-flex justify-content-between align-items-center">
                <h2 style="font-weight: 200;">Permohonan Informasi Publik</h2>
            </div>

        </div>
    </div>

<section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

        <form id="contact-form" action="#" method="post" role="form">
          <div class="error-container"></div>
          <b>Identitas Pemohon*</b><br></br>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <lable><b>Kategori Permohonan</b></label>
                <select class="form-control" name="kategori_name" required>
                    <option value="">Pilih</option>
                    <option value="Carousel">Perorangan</option>
                    <option value="Penghargaan">Lembaga / Organisasi</option>
                </select>
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <lable><b>Email</b></label>
                <input class="form-control form-control-subject" name="email" id="email" placeholder="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <lable><b>Nomor Telepon</b></label>
                <input class="form-control form-control-subject" name="telepon" id="telepon" placeholder="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <lable><b>Pekerjaan</b></label>
                <input class="form-control form-control-subject" name="pekerjaan" id="pekerjaan" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
          <lable><b>Alamat</b></label>
            <textarea class="ckeditor form-control" name="alamat" id="alamat" placeholder="" rows="10"
              required></textarea>
          </div>
       <br>
          <b>Data Permohonan*</b><br></br>
          <div class="form-group">
          <lable><b>Rincian Informasi</b></label>
            <textarea class="ckeditor form-control" name="rincian_informasi" id="rincian_informasi" placeholder="" rows="10"
              required></textarea>
          </div>
          <div class="form-group">
          <lable><b>Tujuan Penggunaan Informasi</b></label>
            <textarea class="ckeditor form-control" name="tujuan" id="tujuan" placeholder="" rows="10"
              required></textarea>
          </div>
          <div class="form-group">
            <label><b>Cara Memperoleh Informasi</b></label><br>
              <input type="radio" id="melihat" name="get_information" value="Melihat" style="margin-left: 12px;">
              <label for="melihat">Melihat</label><br>
              <input type="radio" id="membaca" name="get_information" value="Membaca" style="margin-left: 5px;">
              <label for="membaca">Membaca</label><br>
              <input type="radio" id="mendengarkan" name="get_information" value="Mendengarkan"  style="margin-left: 5px;">
              <label for="mendengarkan">Mendengarkan</label><br>
              <input type="radio" id="mencatat" name="get_information" value="mencatat" style="margin-left: 12px;">
              <label for="mencatat">Mencatat</label>
          </div>
          <div class="form-group">
           <label> <b>Mendapatkan Salinan Informasi</b></label><br>
              <input type="radio" id="softcopy" name="copy_information" value="Soft Copy" style="margin-left: 12px;">
              <label for="softcopy">Soft Copy</label><br>
              <input type="radio" id="hardcopy" name="copy_information" value="Hard Copy" style="margin-left: 5px;">
              <label for="hardcopy" style="margin-left: 5px;">Hard Copy</label>
          </div>
          <div class="form-group">
            <label><b>Cara Mendapatkan Salinan Informasi</b></label><br>
              <input type="radio" id="mengambil_langsung" name="how_copy" value="Mengambil Langsung" style="margin-left: 12px;">
              <label for="mengambil_langsung">Mengambil Langsung</label><br>
              <input type="radio" id="faksimili" name="how_copy" value="Faksimili" style="margin-left: 5px;">
              <label for="faksimili" style="margin-left: 5px;">Faksimili</label><br>
              <input type="radio" id="email" name="how_copy" value="Email" style="margin-left: 12px;">
              <label for="email" style="margin-left: 5px;">Email</label>
          </div>
          <div class="text-left"><br>
            <button class="btn btn-primary solid blank" type="submit">Submit</button>
          </div>
        </form>
        </div>
    </section><!-- End Blog Section -->


</main><!-- End #main -->

@include('layouts.frontend.footer')
<!-- Footer end -->

@endsection


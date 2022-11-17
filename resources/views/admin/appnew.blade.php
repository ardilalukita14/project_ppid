<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard | PPID Kota Madiun</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{  asset ('backend2/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{  asset ('backend2/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{  asset ('backend2/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{  asset ('backend2/assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{  asset ('backend2/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{  asset ('backend2/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{  asset ('backend2/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{  asset ('backend2/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

<body>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">pilih tombol "Logout" dibawah ini</div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-check"></i>
                                         {{ __('YA') }}
        </a>
        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fas fa-times"></i> TIDAK</button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </div>
    </div>
  </div>
  
<!-- General JS Scripts -->
<script src="{{  asset ('backend2/assets/modules/jquery.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/popper.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/tooltip.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/moment.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{  asset ('backend2/assets/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/chart.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{  asset ('backend2/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{  asset ('backend2/assets/js/page/index.js')}}"></script>

<!-- Template JS File -->
<script src="{{  asset ('backend2/assets/js/scripts.js')}}"></script>
<script src="{{  asset ('backend2/assets/js/custom.js')}}"></script>
</body>
</html>

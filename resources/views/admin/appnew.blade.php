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
<script src="{{asset('vendorss/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendorss/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{  asset ('backend2/assets/js/page/index.js')}}"></script>

<!-- Template JS File -->
<script src="{{  asset ('backend2/assets/js/scripts.js')}}"></script>
<script src="{{  asset ('backend2/assets/js/custom.js')}}"></script>

<script src="{{ asset('backend2/assets/select2/dist/js/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover1').DataTable(); // ID From dataTable with Hover
    });
  </script>
  
</body>
</html>

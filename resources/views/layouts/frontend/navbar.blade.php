<div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">

              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div id="navbar-collapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav mr-auto">
                          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            {{-- <ul class="dropdown-menu" role="menu">
                              <li class="active"><a href="index.html">Home One</a></li>
                              <li><a href="index-2.html">Home Two</a></li>
                            </ul> --}}

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Pemerintah Kota <br> Madiun </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="/profil-kota-madiun">Profil Kota Madiun</a></li>
                                    <li><a href="/sejarah-kota-madiun">Sejarah Kota Madiun</a></li>
                                    <li><a href="#!">Letak Geografis Kota Madiun</a></li>
                                    <li><a href="#!">Profil Pemerintah Kota Madiun</a></li>
                                    <li><a href="#!">Profil Pejabat Daerah</a></li>
                                    <li><a href="#!">LHKPN Pejabat Publik Pemerintah Kota Madiun</a></li>
                                    <li><a href="#!">Visi Misi Kota Madiun</a></li>
                                    <li><a href="#!">Bagan Struktur Organisasi Pemerintah Kota Madiun</a></li>
                                    <li><a href="#!">Struktur Organisasi Unit Kerja</a></li>
                                    <li><a href="#!">Tupoksi Pemerintah Kota Madiun</a></li>
                                    <li><a href="#!">Tupoksi Unit Kerja</a></li>
                                    <li><a href="#!">Agenda Kerja dan Kegiatan Pimpinan Pemerintah Kota Madiun</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">PPID Kota Madiun </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ route('menu.profil.ppid') }}">Profil PPID Kota Madiun</a></li>
                                    <li><a href="{{ route('menu.visimisi.ppid') }}">Visi Misi PPID</a></li>
                                    <li><a href="#!">Bagan Struktur PPID</a></li>
                                    <li><a href="#!">SOP</a></li>
                                    <li><a href="#!">Tupoksi PPID</a></li>
                                    <li><a href="#!">SK PPID</a></li>
                                    <li><a href="#!">Perwal PPID</a></li>
                                    <li><a href="#!">Maklumat PPID</a></li>
                                    <li><a href="#!">Jam Pelayanan PPID</a></li>
                                    <li><a href="#!">SK Daftar Informasi Publik</a></li>
                                    <li><a href="#!">SK Daftar Informasi yang Dikecualikan</a></li>
                                  </ul>
                              </li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#">PPID Pelaksana Kota Madiun</a></li>


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi Publik <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Daftar Informasi <br> Publik </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#!">Daftar Informasi Publik 2022</a></li>
                                    <li><a href="#!">Daftar Informasi Publik PPID Pelaksana</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Informasi Secara Berkala</a></li>
                              <li><a href="#">Informasi Serta Merta</a></li>
                              <li><a href="#">Informasi Setiap Saat</a></li>
                              <li><a href="#">Informasi Dikecualikan Penetapan dan Proses Uji Konsekuensi</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Download <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Pengumuman</a></li>
                          <li><a href="#">Produk Hukum</a></li>
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">SOP</a>
                                <ul class="dropdown-menu">
                                  <li><a href="#!">SOP Pedoman Pengelolaan Organisasi</a></li>
                                  <li><a href="#!">SOP Pedoman Pengelolaan Administrasi</a></li>
                                  <li><a href="#!">SOP Pedoman Pengelolaan Kepegawaian</a></li>
                                  <li><a href="#!">SOP Pedoman Pengelolaan Keuangan</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Materi PPID</a>
                              <ul class="dropdown-menu">
                                <li><a href="#!">Materi PPID Kota</a></li>
                                <li><a href="#!">Materi Umum</a></li>
                              </ul>
                          </li>
                            <li><a href="#">Laporan Pengaduan</a></li>
                            <li><a href="#">Berita PPID</a></li>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">Narasi Tunggal</a></li>
                          </ul>
                      </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeri/Infografis <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Galeri</a></li>
                              <li><a href="#">Infografis</a></li>
                            </ul>
                        </li>

                      </ul>
                  </div>
                </nav>

          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>

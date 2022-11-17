 <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/dashboard-admin-ppid">PPID KOTA MADIUN</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard-admin-ppid">PPID</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ (request()->is('dashboard-admin-ppid')) ? 'active' : '' }}">
                <a class="nav-link"
                    href="/dashboard-admin-ppid"><i class="fa fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            {{-- <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="/dashboard-admin-ppid"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a></li> --}}

            <li class="menu-header">Profil Kota Madiun</li>

            <li class="nav-item dropdown {{ Request::is('*profil*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe"></i> <span>Pemerintah Kota</span></a>
              <ul class="dropdown-menu">
                <li class="{{ (request()->is('profile/kota-madiun')) ? 'active' : '' }}"><a class="nav-link" href="{{route('madiunprofile.index')}}">Profil Kota Madiun</a></li>
                <li class="{{ (request()->is('profile/sejarah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('sejarah.index')}}">Sejarah Kota Madiun</a></li>
                <li class="{{ (request()->is('profile/letak-geografis')) ? 'active' : '' }}"><a class="nav-link" href="{{route('geografis.index')}}">Letak Geografis</a></li>
                <li class="{{ (request()->is('profile/profil-pemerintah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('profil.pemerintah.index')}}">Profil Pemerintah</a></li>
                <li class="{{ (request()->is('profile/profil-pejabat')) ? 'active' : '' }}"><a class="nav-link" href="{{route('profil.pejabat.index')}}">Profil Pejabat Daerah</a></li>
                <li class="{{ (request()->is('profile/lhkpn-pejabat')) ? 'active' : '' }}"><a class="nav-link" href="{{route('lhkpn.index')}}">LHKPN Pejabat Publik</a></li>
                <li class="{{ (request()->is('profile/visi-misi')) ? 'active' : '' }}"><a class="nav-link" href="{{route('visimisi.index')}}">Visi Misi Kota Madiun</a></li>
                <li class="nav-item dropdown {{ Request::is('*struktur*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><span>Struktur Organisasi</span></a>
                  <ul class="dropdown-menu">
                    <li class="{{ (request()->is('profile/struktur-pemerintah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('struktur.pemerintah.index')}}">Organisasi Pemerintah</a></li>
                    <li class="{{ (request()->is('profile/struktur-unit-kerja')) ? 'active' : '' }}"><a class="nav-link" href="{{route('struktur.unitkerja.index')}}">Organisasi Unit Kerja</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown {{ Request::is ('*tupoksi*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><span>Tupoksi</span></a>
                  <ul class="dropdown-menu">
                    <li class="{{ (request()->is('profile/tupoksi-pemerintah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('tupoksi.pemerintah.index')}}">Pemerintah</a></li>
                    <li class="{{ (request()->is('profile/tupoksi-unit-kerja')) ? 'active' : '' }}"><a class="nav-link" href="{{route('tupoksi.unitkerja.index')}}">Unit Kerja</a></li>
                  </ul>
                </li>
                <li class="{{ (request()->is('profile/agenda-kerja-kegiatan-pimpinan')) ? 'active' : '' }}"><a class="nav-link" style ="margin-top:10px;" href="{{route('agenda.index')}}">Agenda Kerja & Kegiatan Pimpinan</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown {{ Request::is ('*ppid-kota*') ? 'active' : '' }}">
              <a href="#" class="nav-link has-dropdown"data-toggle="dropdown"><i class="fas fa-file-alt"></i> <span>PPID Kota Madiun</span></a>
              <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Profil PPID</a></li>
                    <li><a class="nav-link" href="#">Visi Misi PPID</a></li>
                    <li><a class="nav-link" href="#">Bagan Struktur</a></li>
                    <li><a class="nav-link" href="#">SOP</a></li>
                    <li><a class="nav-link" href="#">Tupoksi</a></li>
                    <li><a class="nav-link" href="#">SK PPID</a></li>
                    <li><a class="nav-link" href="#">Perwal</a></li>
                    <li><a class="nav-link" href="#">Maklumat</a></li>
                    <li><a class="nav-link" href="#">Jam Pelayanan</a></li>
                    <li><a class="nav-link" href="#">SK Daftar Informasi Publik</a></li>
                    <li><a class="nav-link" href="#">SK Daftar Dikecualikan</a></li>
                    <li><a class="nav-link" href="#">PPID Pelaksana</a></li>
              </ul>
            </li>

            <li class="menu-header">Informasi Publik</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-file"></i> <span>Daftar Informasi Publik</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="#">Informasi Publik 2022</a></li>
                  <li><a class="nav-link" href="#">Informasi PPID Pelaksana</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href=""><i class="far fa-calendar-alt"></i> <span>Informasi Secara Berkala</span></a></li>
              <li><a class="nav-link" href=""><i class="far fa-file"></i> <span>Informasi Serta Merta</span></a></li>
              <li><a class="nav-link" href=""><i class="fas fa-clock"></i> <span>Informasi Setiap Saat</span></a></li>
              <li><a class="nav-link" href=""><i class="far fa-times-circle"></i> <span>Informasi Dikecualikan</span></a></li>

            <li class="menu-header">Dokumen</li>
            <li><a class="nav-link" href=""><i class="fas fa-bullhorn"></i> <span>Pengumuman</span></a></li>
            <li><a class="nav-link" href=""><i class="fas fa-ribbon"></i> <span>Produk Hukum</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>SOP</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Pengelolaan Organisasi</a></li>
                <li><a class="nav-link" href="#">Pengelolaan Administrasi</a></li>
                <li><a class="nav-link" href="#">Pengelolaan Kepegawaian</a></li>
                <li><a class="nav-link" href="#">Pengelolaan Keuangan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-envelope"></i> <span>Materi PPID</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Materi PPID Kota</a></li>
                <li><a class="nav-link" href="">Materi Umum</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href=""><i class="fas fa-headset"></i> <span>Laporan Pengaduan</span></a></li>
            <li><a class="nav-link" href=""><i class="fas fa-newspaper"></i> <span>Berita PPID</span></a></li>
            <li><a class="nav-link" href=""><i class="fas fa-quote-left"></i> <span>Artikel</span></a></li>
            <li><a class="nav-link" href=""><i class="fas fa-microphone"></i> <span>Narasi Tunggal</span></a></li>
          </ul>

          <ul class="sidebar-menu">
          <li class="menu-header">Galeri</li>
          <li><a class="nav-link" href=""><i class="far fa-image"></i> <span>Galeri</span></a></li>
          <li><a class="nav-link" href=""><i class="fas fa-file-image"></i> <span>Infografis</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">

          </div>
        </aside>
      </div>

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
                    href="/dashboard-admin-ppid"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Profil Kota Madiun</li>
            <li class="nav-item dropdown {{ (request()->is('profile/kota-madiun','profile/sejarah',
                                                            'profile/letak-geografis',
                                                            'profile/profil-pemerintah','profile/profil-pejabat',
                                                            'profile/lhkpn-pejabat','profile/visi-misi',
                                                            'profile/struktur-pemerintah','profile/struktur-unit-kerja',
                                                            'profile/tupoksi-pemerintah','profile/tupoksi-unit-kerja',
                                                            'profile/agenda-kerja-kegiatan-pimpinan')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe"></i> <span>Pemerintah Kota</span></a>
              <ul class="dropdown-menu">
                <li class="{{ (request()->is('profile/kota-madiun')) ? 'active' : '' }}"><a class="nav-link" href="{{route('madiunprofile.index')}}">Profil Kota Madiun</a></li>
                <li class="{{ (request()->is('profile/sejarah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('sejarah.index')}}">Sejarah Kota Madiun</a></li>
                <li class="{{ (request()->is('profile/letak-geografis')) ? 'active' : '' }}"><a class="nav-link" href="{{route('geografis.index')}}">Letak Geografis</a></li>
                <li class="{{ (request()->is('profile/profil-pemerintah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('profil.pemerintah.index')}}">Profil Pemerintah</a></li>
                <li class="{{ (request()->is('profile/profil-pejabat')) ? 'active' : '' }}"><a class="nav-link" href="{{route('profil.pejabat.index')}}">Profil Pejabat Daerah</a></li>
                <li class="{{ (request()->is('profile/lhkpn-pejabat')) ? 'active' : '' }}"><a class="nav-link" href="{{route('lhkpn.index')}}">LHKPN Pejabat Publik</a></li>
                <li class="{{ (request()->is('profile/visi-misi')) ? 'active' : '' }}"><a class="nav-link" href="{{route('visimisi.index')}}">Visi Misi Kota Madiun</a></li>
                <li class="nav-item dropdown {{ (request()->is('profile/struktur-pemerintah',
                                                                'profile/struktur-unit-kerja')) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><span>Struktur Organisasi</span></a>
                  <ul class="dropdown-menu">
                    <li class="{{ (request()->is('profile/struktur-pemerintah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('struktur.pemerintah.index')}}">Organisasi Pemerintah</a></li>
                    <li class="{{ (request()->is('profile/struktur-unit-kerja')) ? 'active' : '' }}"><a class="nav-link" href="{{route('struktur.unitkerja.index')}}">Organisasi Unit Kerja</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown {{ (request()->is('profile/tupoksi-pemerintah',
                                                                'profile/tupoksi-unit-kerja')) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><span>Tupoksi</span></a>
                  <ul class="dropdown-menu">
                    <li class="{{ (request()->is('profile/tupoksi-pemerintah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('tupoksi.pemerintah.index')}}">Pemerintah</a></li>
                    <li class="{{ (request()->is('profile/tupoksi-unit-kerja')) ? 'active' : '' }}"><a class="nav-link" href="{{route('tupoksi.unitkerja.index')}}">Unit Kerja</a></li>
                  </ul>
                </li>
                <li class="{{ (request()->is('profile/agenda-kerja-kegiatan-pimpinan')) ? 'active' : '' }}"><a class="nav-link" style ="margin-top:10px;" href="{{route('agenda.index')}}">Agenda Kerja & Kegiatan Pimpinan</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown {{ (request()->is('profile/ppid','profile/visi-misi-ppid',
                                                            'profile/bagan-struktur-ppid',
                                                            'profile/sop-ppid','profile/tupoksi-ppid',
                                                            'profile/sk-ppid','profile/perwal-ppid',
                                                            'profile/maklumat-ppid','profile/jam-pelayanan',
                                                            'profile/sk-daftar-informasi-publik',
                                                            'profile/sk-daftar-informasi-dikecualikan',
                                                            'profile/agenda-kerja-kegiatan-pimpinan',
                                                            'ppid-pelaksana')) ? 'active' : '' }}">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-alt"></i> <span>PPID Kota Madiun</span></a>
              <ul class="dropdown-menu">
                    <li class="{{ (request()->is('profile/ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/ppid">Profil PPID</a></li>
                    <li class="{{ (request()->is('profile/visi-misi-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/visi-misi-ppid">Visi Misi PPID</a></li>
                    <li class="{{ (request()->is('profile/bagan-struktur-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/bagan-struktur-ppid">Bagan Struktur</a></li>
                    <li class="{{ (request()->is('profile/sop-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/sop-ppid">SOP</a></li>
                    <li class="{{ (request()->is('profile/tupoksi-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/tupoksi-ppid">Tupoksi</a></li>
                    <li class="{{ (request()->is('profile/sk-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/sk-ppid">SK PPID</a></li>
                    <li class="{{ (request()->is('profile/perwal-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/perwal-ppid">Perwal</a></li>
                    <li class="{{ (request()->is('profile/maklumat-ppid')) ? 'active' : '' }}"><a class="nav-link" href="/profile/maklumat-ppid">Maklumat</a></li>
                    <li class="{{ (request()->is('profile/jam-pelayanan')) ? 'active' : '' }}"><a class="nav-link" href="/profile/jam-pelayanan">Jam Pelayanan</a></li>
                    <li class="{{ (request()->is('profile/sk-daftar-informasi-publik')) ? 'active' : '' }}"><a class="nav-link" href="/profile/sk-daftar-informasi-publik">SK Daftar Informasi Publik</a></li>
                    <li class="{{ (request()->is('profile/sk-daftar-informasi-dikecualikan')) ? 'active' : '' }}"><a class="nav-link" href="/profile/sk-daftar-informasi-dikecualikan">SK Daftar Dikecualikan</a></li>
                    <li class="{{ (request()->is('ppid-pelaksana')) ? 'active' : '' }}"><a class="nav-link" href="/ppid-pelaksana">PPID Pelaksana</a></li>
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


                <li class="menu-header">Galeri</li>
                <li><a class="nav-link" href=""><i class="far fa-image"></i> <span>Galeri</span></a></li>
                <li><a class="nav-link" href=""><i class="fas fa-file-image"></i> <span>Infografis</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">

          </div>
        </aside>
      </div>

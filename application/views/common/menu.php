 <?php echo $this->session->flashdata('login');?>
<nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
    data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
      <i class="icon md-more" aria-hidden="true"></i>
    </button>
    <a class="navbar-brand navbar-brand-center" href="<?php echo site_url(); ?>">
      <img class=" " src="<?php echo site_url(); ?>assets/assets/images/logo_umum.png" width="150%"
      title="BINA MARGA">
      <img class="navbar-brand-logo navbar-brand-logo-special" src="<?php echo site_url(); ?>assets/assets/images/logo.jpg"
      title="BINA MARGA">
      </a>

  </div>
  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">

      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

        <li class="dropdown">
          <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
          data-animation="scale-up" role="button">

              <?php
              $admin=$this->session->userdata('admin');
               if(empty($admin)==0){
              ?>
              <span class="avatar avatar-online">
              <img src="<?php echo site_url(); ?>assets/assets/images/logout.png" alt="...">
              <?php } ?>
              <?php
               if(empty($admin)==1){
              ?>
              <span class="avatar avatar-offline">
              <img src="<?php echo site_url(); ?>assets/assets/images/login.png" alt="...">
              <?php } ?>
              <i></i>
            </span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <?php
            $admin=$this->session->userdata('admin');
             if(empty($admin)==0){
            ?>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>ubah_profil?id=<?php echo $admin ?>" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>ubah_password?id=<?php echo $admin ?>" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Ubah Password</a>
              </li>
              <li class="divider" role="presentation"></li>
            <?php } ?>
            <?php
             if(empty($admin)==0){
            ?>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>logout" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Keluar</a>
              </li>
            <?php }else{ ?>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>login" role="menuitem"><i class="icon md-sign-in" aria-hidden="true"></i> Masuk</a>
              </li>
            <?php } ?>
          </ul>
        </li>

      </ul>

      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->
    <!-- Site Navbar Seach -->
    <div class="collapse navbar-search-overlap" id="site-navbar-search">
      <form role="search">
        <div class="form-group">
          <div class="input-search">
            <i class="input-search-icon md-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
            data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
  </div>
</nav>
<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu">
          <li class="site-menu-category ">General</li>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="home"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>home"  data-dropdown-toggle="false">
              <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
              <span class="site-menu-title">Beranda</span>
              <span class="site-menu-arrow"></span>
            </a>

          </li>
          <?php
          $admin=$this->session->userdata('admin');
           if(empty($admin)==0){
          ?>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="pelayanan_kesehatan"||$link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
            <a href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon md-view-list-alt" aria-hidden="true"></i>
              <span class="site-menu-title">Pelayanan Kesehatan</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">

              <li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan">
                  <span class="site-menu-title">Data Pegawai</span>
                </a>
              </li>

              <li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan/tambah">
                  <span class="site-menu-title">Tambah Pegawai</span>
                </a>
              </li>


            </ul>
          </li>
		  
		  <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="pelayanan_kesehatan"||$link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
            <a href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon md-view-list-alt" aria-hidden="true"></i>
              <span class="site-menu-title">Cetak</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">

              <li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan">
                  <span class="site-menu-title">Absen Bulanan</span>
                </a>
              </li>

              <li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan/tambah">
                  <span class="site-menu-title">Rekap Absen</span>
                </a>
              </li>
			   <li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan/tambah">
                  <span class="site-menu-title">Absen Lainnya</span>
                </a>
				<li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan/tambah">
                  <span class="site-menu-title">DUK</span>
                </a>
              </li>
			  <li class="site-menu-item <?php $link=uri_string(); if($link =="pelayanan_kesehatan/tambah"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>pelayanan_kesehatan/tambah">
                  <span class="site-menu-title">csv</span>
                </a>
              </li>
              </li>


            </ul>
          </li>
          <?php } ?>

         
          
          <?php
          $admin=$this->session->userdata('admin');
           if(empty($admin)==0){
          ?>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="admin"||$link =="kabupaten"||$link =="kecamatan"){ echo "active";} ?>">
            <a href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon md-settings" aria-hidden="true"></i>
              <span class="site-menu-title">Pengaturan</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">

              <li class="site-menu-item <?php $link=uri_string(); if($link =="admin"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>admin">
                  <span class="site-menu-title">Admin</span>
                </a>
              </li>
              <li class="site-menu-item <?php $link=uri_string(); if($link =="kabupaten"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>kabupaten">
                  <span class="site-menu-title">Agama</span>
                </a>
              </li>
              <li class="site-menu-item <?php $link=uri_string(); if($link =="kecamatan"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>kecamatan">
                  <span class="site-menu-title">Golongan</span>
                </a>
              </li>
              <li class="site-menu-item <?php $link=uri_string(); if($link =="desa"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>desa">
                  <span class="site-menu-title">Bidang</span>
                </a>
              </li>

            </ul>
          </li>

        <?php } ?>

        </ul>
      </div>
    </div>
  </div>
</div>

<!-- <li class="dropdown <?php// $link=uri_string(); if($link =="home"){ echo "active";} ?>"> -->

<?php if  ($this->session->userdata('user_id') == null) 

  {  
    redirect('Backoffice');
  }
  else
  {
    $user_name = $this->session->userdata('user_id');
    $id_user = $user_name['id'];
    $nama_user = $user_name['name'];

  }
?>
<nav class=" navbar navbar-expand-lg align-items-start" >
<div class=" sidebar collapse navbar-collapse align-items-start" id="navbarNav">
  <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('Backoffice/dashboard')?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Bangunan Gedung</li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('Backoffice/bangunan')?>">
            <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Bangunan Gedung</span>
            </a>
          </li>
          
          <li class="nav-item nav-category">Utilitas</li>
          <li class="nav-item">
            <a class="nav-link"  href="<?=base_url('Backoffice/pengguna')?>" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Pengguna</span>
              <i class="menu-arrow"></i>
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('Backoffice/ganti_pass')?>" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi  mdi-key"></i>
              <span class="menu-title">Ganti Password</span>
              <i class="menu-arrow"></i>
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?=base_url('Backoffice/sign_out')?>" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-exit"></i>
              <span class="menu-title">Keluar</span>
              <i class="menu-arrow"></i>
            </a>
            
          </li>
          
         
        </ul>
</div>
        
      </nav>
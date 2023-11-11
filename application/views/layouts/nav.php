<nav id="navtick" class="navbar navbar-expand-lg shadow-sm glass" style="z-index: 999;">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url('index.php')?>">
                <img src="<?=base_url('assets/img/logo.png')?>" alt="logo-pupr" width="150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav align-items-center d-flex ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="beranda" href="<?=base_url('index.php')?>">Beranda</a>
                    </li>
                    <li class=" dropdown d-flex">
                        <a class="btn nav-link d-flex align-items-center " href="#" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="m-0">Profil Kepemilikan</p> <i class="fa fa-sort-down ms-2 mb-2"
                                aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('Welcome/kepemilikan')?>">Berdasarkan Kepemilikan IMB</a>
                            </li>
                            
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('Welcome/fung_pem')?>">Berdasarkan Fungsi</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li class=" dropdown d-flex">
                        <a class="btn nav-link d-flex align-items-center " href="#" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="m-0">Garis Sepadan</p> <i class="fa fa-sort-down ms-2 mb-2"
                                aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Bangunan')?>">Bangunan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Pantai')?>">Pantai</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Sungai')?>">Sungai</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Waduk')?>">Waduk</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Danau')?>">Danau</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Rel')?>">Rel</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Rawa')?>">Rawa</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Saluran')?>">Saluran</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_Sungai')?>">Sutet</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/tsepadan/GS_mataair')?>">Mata Air</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class=" dropdown d-flex">
                        <a class="btn nav-link d-flex align-items-center " href="#" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="m-0">Profil Bangunan</p> <i class="fa fa-sort-down ms-2 mb-2"
                                aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/1')?>">Diatas Drainase</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/2')?>">Diatas Ruang Kereta</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/3')?>">Luas Lantai Bangunan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/4')?>">Koefisien Dasar Bangunan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/5')?>">Kesesuaian Lantai Dasar</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/6')?>">Jumlah Lantai</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/7')?>">Ketinggian Bangunan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/8')?>">Kesesuaian Thd KKOP</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/9')?>">Luas Daerah Hijau</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/10')?>">Kesesuaian Tinggi Pagar</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/profil_bangunan/11')?>">Kondisi Drainase</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('index.php/Welcome/peta')?>">Peta Spasial</a>
                    </li>
                 
                    <li class=" dropdown d-flex">
                        <a class="btn nav-link d-flex align-items-center " href="<?=base_url('index.php/Welcome/stat')?>" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="m-0">Statistik</p> <i class="fa fa-sort-down ms-2 mb-2"
                                aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="dropdown-item nav-link" href="<?=base_url('index.php/Welcome/stat_total')?>">Total</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
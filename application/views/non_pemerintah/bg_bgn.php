<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);">
    <div class="container-fluid ">
        <div class="container h-100 py-5 d-flex align-items-top justify-content-center" style="min-height: calc(100vh - 100px);">
            <div class="row justify-content-center">
                <div class="col d-flex flex-column align-items-center ">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="display-6 fw-bolder judul">
                                <i class="fa fa-database p-1 me-2" aria-hidden="true"></i> Data Bangunan Gedung Non Pemerintah
                            </h1>
                            <h1 class="h5 fw-bold mb-5"><?=$title?></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col glass-nocolor p-3 rounded-3">
                        <table id="example" class="table table-bordered" style="width:90vw">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 25%;">Nama Pemilik</th>
                                        <th style="width: 50%;">Alamat</th>
                                        <th style="width: 15%;"><?=$col[0]?></th>
                                        <?php if ($col[1] != NULL) {?>
                                            <th style="width: 15%;"><?=$col[1]?></th>
                                        <?php } ?>
                                        <th style="width: 5%;">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($bangunan != NULL) {
                                        $i = 1;
                                        foreach ($bangunan as $b) {
                                            if ($att == '1') {
                                                $hasil = $b->Diatas_Drainase;
                                              
                                            }elseif ($att == '2') {
                                                $hasil = $b->Diatas_Rel;
                                                
                                            }elseif ($att == '3') {
                                                $hasil = $b->Kesesuaian_lantai_dasar;
                                                $m = $b->Luas_Lantai_Dasar. ' m<sup>2</sup>';
                                            }elseif ($att == '4') {
                                                $hasil = $b->Koefisien_Dasar;
                                                $m = $b->Prosen_Koefisien_Dasar.' %';
                                            }elseif ($att == '5') {
                                                $hasil = $b->Kesesuaian_Luas_Lantai;
                                                $m = $b->Luas_Lantai. ' m<sup>2</sup>';
                                            }elseif ($att == '6') {
                                                $hasil = $b->Kesesuaian_Jumlah_Lantai;
                                                $m = $b->Jumlah_Lantai.' Lantai';
                                            }elseif ($att == '7') {
                                                $hasil = $b->Kesesuaian_Ketinggian;
                                                $m = $b->Ketinggian.' m';
                                            }elseif ($att == '8') {
                                                $hasil = $b->KKOP_Penerbangan;
                                                $m = $b->KKOP_Penerbangan_m.' m';
                                            }elseif ($att == '9') {
                                                $hasil = $b->Kesesuaian_Daerah_Hijau;
                                                $m = $b->Luas_Daerah_Hijau.' m<sup>2</sup>';
                                            }elseif ($att == '10') {
                                                $hasil = $b->Kesesuaian_tinggi_pagar;
                                                $m = $b->Tinggi_pagar_m.' m';
                                            }elseif ($att == '11') {
                                                $hasil = $b->Kondisi_drainase;
                                            
                                            }
                                           
                                  ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$b->Nama_Pemilik?></td>
                                        <td><?=$b->Alamat?> Kel. <?=$b->Kelurahan?> Kec. <?=$b->Kecamatan?></td>
                                        <td><?=$hasil?></td>
                                        <?php if ($col[1] != NULL) {?>
                                        <td><?=$m?></td>
                                        <?php } ?>
                                        <td><button class="btn btn-primary d-flex align-items-center"><i class="fa fa-database me-2" aria-hidden="true"></i>
                                                <p class="m-0"> Detail</p>
                                            </button></td>
                                    </tr>
                                    <?php           
                                       $i++; }
                                    } ?>


                                </tbody>

                            </table>
                        </div>
                    </div>





                </div>
            </div>

        </div>
    </div>

</section>
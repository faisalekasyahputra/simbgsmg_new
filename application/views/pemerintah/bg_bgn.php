<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);">
    <div class="container-fluid pt-5">
        <div class="container h-100 pt-5 d-flex align-items-top justify-content-center" style="min-height: 100vh; ">
            <div class="row justify-content-center">
                <div class="col d-flex flex-column align-items-center ">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="display-6 fw-bolder judul">
                                <i class="fa fa-database p-1 me-2" aria-hidden="true"></i> Data Bangunan Gedung Pemerintah
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
                                        <th style="width: 15%;">Sesuai</th>
                                        <th style="width: 15%;">Jarak</th>
                                        <th style="width: 5%;">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($bangunan != NULL) {
                                        $i = 1;
                                        foreach ($bangunan as $b) {
                                            if ($att == 'GS_Bangunan') {
                                                $hasil = $b->GS_Bangunan;
                                                $m = $b->GS_Bangunan_m;
                                            }elseif ($att == 'GS_Pantai') {
                                                $hasil = $b->GS_Pantai;
                                                $m = $b->GS_Pantai_m;
                                            }elseif ($att == 'GS_Sungai') {
                                                $hasil = $b->GS_Sungai;
                                                $m = $b->GS_Sungai_m;
                                            }elseif ($att == 'GS_Waduk') {
                                                $hasil = $b->GS_Waduk;
                                                $m = $b->GS_Waduk_m;
                                            }elseif ($att == 'GS_Danau') {
                                                $hasil = $b->GS_Danau;
                                                $m = $b->GS_Danau_m;
                                            }elseif ($att == 'GS_Rel') {
                                                $hasil = $b->GS_Rel;
                                                $m = $b->GS_Rel_m;
                                            }elseif ($att == 'GS_Rawa') {
                                                $hasil = $b->GS_Rawa;
                                                $m = $b->GS_Rawa_m;
                                            }elseif ($att == 'GS_Saluran') {
                                                $hasil = $b->GS_Saluran;
                                                $m = $b->GS_Saluran_m;
                                            }elseif ($att == 'GS_Sutet') {
                                                $hasil = $b->GS_Sutet;
                                                $m = $b->GS_Sutet_m;
                                            }elseif ($att == 'GS_mataair') {
                                                $hasil = $b->GS_mataair;
                                                $m = $b->GS_mataair_m;
                                            }
                                            if ($hasil == '1') {
                                                $hasil = 'Sesuai';
                                            }else{
                                                $hasil = 'Tidak Sesuai';
                                            }
                                  ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$b->Nama_Pemilik?></td>
                                        <td><?=$b->Alamat?> Kel. <?=$b->Kelurahan?> Kec. <?=$b->Kecamatan?></td>
                                        <td><?=$hasil?></td>
                                        <td><?=$m?> m</td>
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
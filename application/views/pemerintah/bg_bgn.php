<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);">
    <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col d-flex flex-column align-items-center ">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="display-6 fw-bolder judul">
                                <i class="fa fa-database p-1 me-2" aria-hidden="true"></i> Data Bangunan Gedung Pemerintah
                            </h1>
                            <h1 class="h5 fw-bold mb-5"><?= $title ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 p-3">
                        <div class="col glass-nocolor border-top-cstm p-3 rounded-3">
                            <div class="table-responsive overflow-x-scroll">
                                <table id="example" class="table table-striped table-sm ">
                                    <thead class="bg-light-subtle">
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
                                                } elseif ($att == 'GS_Pantai') {
                                                    $hasil = $b->GS_Pantai;
                                                    $m = $b->GS_Pantai_m;
                                                } elseif ($att == 'GS_Sungai') {
                                                    $hasil = $b->GS_Sungai;
                                                    $m = $b->GS_Sungai_m;
                                                } elseif ($att == 'GS_Waduk') {
                                                    $hasil = $b->GS_Waduk;
                                                    $m = $b->GS_Waduk_m;
                                                } elseif ($att == 'GS_Danau') {
                                                    $hasil = $b->GS_Danau;
                                                    $m = $b->GS_Danau_m;
                                                } elseif ($att == 'GS_Rel') {
                                                    $hasil = $b->GS_Rel;
                                                    $m = $b->GS_Rel_m;
                                                } elseif ($att == 'GS_Rawa') {
                                                    $hasil = $b->GS_Rawa;
                                                    $m = $b->GS_Rawa_m;
                                                } elseif ($att == 'GS_Saluran') {
                                                    $hasil = $b->GS_Saluran;
                                                    $m = $b->GS_Saluran_m;
                                                } elseif ($att == 'GS_Sutet') {
                                                    $hasil = $b->GS_Sutet;
                                                    $m = $b->GS_Sutet_m;
                                                } elseif ($att == 'GS_mataair') {
                                                    $hasil = $b->GS_mataair;
                                                    $m = $b->GS_mataair_m;
                                                }
                                                if ($hasil == '1') {
                                                    $hasil = 'Sesuai';
                                                } else {
                                                    $hasil = 'Tidak Sesuai';
                                                }
                                        ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $b->Nama_Pemilik ?></td>
                                                    <td><?= $b->Alamat ?> Kel. <?= $b->Kelurahan ?> Kec. <?= $b->Kecamatan ?></td>
                                                    <td><?= $hasil ?></td>
                                                    <td><?= $m ?> m</td>
                                                    <td><a class="btn btn-primary d-flex align-items-center" href="<?= base_url('Welcome/data_opd/' . $b->id) ?>" target="_blank"><i class="fa fa-database me-2" aria-hidden="true"></i>
                                                            <p class="m-0 text-center"> Detail</p>
                                                        </a></td>
                                                </tr>
                                        <?php
                                                $i++;
                                            }
                                        } ?>


                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
        
    </div>

</section>
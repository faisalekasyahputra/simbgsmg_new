<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);">
    <div class="container-fluid">
        <div class="container h-100 pt-5 d-flex align-items-top justify-content-center" style="min-height: calc(100vh - 100px);">
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
                                        <th style="width: 35%;">Alamat</th>
                                        <th style="width: 30%;">Fungsi</th>
                                        
                                        <th style="width: 5%;">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($bangunan != NULL) {
                                        $i = 1;
                                        foreach ($bangunan as $b) {
                                            if ($b->Memiliki_IMB == '1') {
                                                $mem = 'Memiliki';
                                            }else{
                                                $mem = 'Tidak Memiliki';
                                            }
                                  ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$b->Nama_Pemilik?></td>
                                        <td><?=$b->Alamat?> Kel. <?=$b->Kelurahan?> Kec. <?=$b->Kecamatan?></td>
                                        <td><?=$mem?></td>
                                     
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
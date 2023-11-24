<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);">
    <div class="container-fluid py-5">
        <div class="container" style="min-height: 100vh;">
            <div class="row justify-content-center">
                <div class="col d-flex flex-column align-items-center ">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="display-6 fw-bolder judul">
                                <i class="fa fa-database p-1 me-2" aria-hidden="true"></i> Data Bangunan Gedung 
                            </h1>
                            <h1 class="h5 fw-bold mb-5"><?=$title?></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col glass-nocolor border-top-cstm p-3 rounded-3">
                        <table id="example" class="table table-bordered" style="width:90vw">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 25%;">Nama Pemilik</th>
                                        <th style="width: 50%;">Alamat</th>
                                        <th style="width: 15%;">Fungsi</th>
                                        
                                        <th style="width: 5%;">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($bangunan != NULL) {
                                        $i = 1;
                                        foreach ($bangunan as $b) {
                                         
                                  ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$b->Nama_Pemilik?></td>
                                        <td><?=$b->Alamat?> Kel. <?=$b->Kelurahan?> Kec. <?=$b->Kecamatan?></td>
                                        <td><?=$b->Fungsi?></td>
                                     
                                        <td><a class="btn btn-primary d-flex align-items-center" href="<?=base_url('Welcome/data_opd/'.$b->id )?>" target="_blank"><i class="fa fa-database me-2" aria-hidden="true"></i>
                                                <p class="m-0"> Detail</p>
                                            </a></td>
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
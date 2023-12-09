<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);" data-aos="fade-up" data-aos-offset="100" data-aos-delay="100" data-aos-duration="400" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
    <div class="container-fluid">

        <div class="row justify-content-center pt-3">
            <div class="col d-flex flex-column align-items-center ">
                <div class="row" data-aos="fade-up" data-aos-offset="100" data-aos-delay="300" data-aos-duration="400" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
                    <div class="col text-center">
                        <h1 class="display-6 fw-bolder judul">
                            <i class="fa fa-database p-1 me-2" aria-hidden="true"></i> Data Bangunan Gedung
                        </h1>
                        <h1 class="h5 fw-bold">Berdasarkan Kepemilikan IMB</h1>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mb-5 p-3">
            <div class="col glass-nocolor border-top-cstm p-3 rounded-3">
<div class="table-responsive table-responsive-sm">
                <table id="example" class="table table-striped table-sm ">
                    <thead class="bg-light-subtle">
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 30%;">Nama Pemilik</th>
                            <th style="width: 40%;">Alamat</th>
                            <th style="width: 20%;">Memiliki IMB</th>
                            <th style="width: 30%;">Nomor</th>
                            <th style="width: 30%;">Status Kepemilikan</th>
                            <th style="width: 30%;">Luas Lahan</th>
                            <th style="width: 5%;">Opsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($bangunan != NULL) {
                            $i = 1;
                            foreach ($bangunan as $b) {
                                if ($b->Memiliki_IMB == '1') {
                                    $mem = 'Memiliki';
                                } else {
                                    $mem = 'Tidak Memiliki';
                                }
                                $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');
                                if ($luas_lahan != NULL) {
                                    $l = $luas_lahan[0]->Luas_Lahan;
                                } else {
                                    $l = 0;
                                }
                        ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $b->Nama_Pemilik ?></td>
                                    <td><?= $b->Alamat ?> Kel. <?= $b->Kelurahan ?> Kec. <?= $b->Kecamatan ?></td>
                                    <td><?= $mem ?></td>
                                    <td><?= $b->Nomor_IMB ?></td>
                                    <td><?= $b->Status_Kepemilikan ?></td>
                                    <td><?= $l ?> m<sup>2</sup></td>
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
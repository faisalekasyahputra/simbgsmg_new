<div class="container-fluid p-0 bg-body-tertiary">
    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 85px);">
        <div class="row w-100">

            <div id="sidebar-left" class="col-2  border-end border-1 bg-body" data-aos="fade-right" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

                <!-- NAV TABS    -->
                <div class="nav flex-column nav-pills py-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link nav-link-tab active primary-color m-2 btn  glass text-start" id="vprofil-tab" data-bs-toggle="pill" data-bs-target="#profil-tab" type="button" role="tab" aria-controls="profil-tab" aria-selected="true"><i class="fa fa-home me-2" aria-hidden="true"></i> Profil Bangunan</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vpeta-tab" data-bs-toggle="pill" data-bs-target="#peta-tab" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-map me-2" aria-hidden="true"></i> Peta Spasial</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vklas-tab" data-bs-toggle="pill" data-bs-target="#klas-tab" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-columns me-2" aria-hidden="true"></i> Klasifikasi</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vteknis-tab" data-bs-toggle="pill" data-bs-target="#teknis-tab" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa-solid fa-gear me-2"></i> Pendataan Teknis</a>
                </div>



            </div>
            <div class="col tab-content" id="myTabContent" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                <!-- Tab 1 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade show active h-100" id="profil-tab" role="tabpanel" aria-labelledby="profil-tab" tabindex="0">
                    <div class="row d-flex  py-3 g-3 h-100">
                        <div class="col rounded-3">

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm">
                                <table class="table table-hover table-borderless overflow-hidden">

                                    <tbody>
                                        <?php if ($bangunan != NULL) {

                                            foreach ($bangunan as $b) {
                                                if ($b->Memiliki_IMB == '1') {
                                                    $mem = 'Memiliki';
                                                } else {
                                                    $mem = 'Tidak Memiliki';
                                                }
                                                $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');

                                                if ($luas_lahan != NULL) {

                                                    foreach ($luas_lahan as $ln) {
                                                        if ($l = $ln->Luas_Lahan) {
                                                        } else {
                                                            $l = 0;
                                                        }
                                                    }
                                                }

                                        ?>
                                        <?php }
                                        } ?>


                                        <tr>
                                            <th scope="row" width="25%">Nama Pemilik</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Nama_Pemilik ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Alamat</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Alamat ?>, <?= $b->Kelurahan ?> ,<?= $b->Kecamatan ?> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Kelurahan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Kelurahan ?> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Kecamatan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Kecamatan ?> </td>

                                        </tr>

                                        <tr>
                                            <th scope="row" width="25%">Status IMB</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $mem ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Nomor IMB</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Nomor_IMB ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Status Kepemilikan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Status_Kepemilikan ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Fungsi</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Fungsi ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Luas Lahan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $l ?> m<sup>2</sup></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Jumlah Lantai</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $ln->Jumlah_Lantai ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Ketinggian</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $ln->Ketinggian ?> m<sup>2</sup></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Koordinat</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Lat ?> <sup>o</sup> , <?= $b->Lng ?> <sup>o</sup> </td>

                                        </tr>



                                    </tbody>
                                </table>

                            </div>



                        </div>
                        <div id="sidebar-right" class="col-4" data-aos="fade-up" data-aos-offset="0" data-aos-delay="650" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                            <div class="card-header border border-bottom-0 bg-primary rounded-top-3 p-3 w-50 mx-3">
                                <p class="text-capitalize m-0 text-center fw-bold text-white">Foto Bangunan</p>

                            </div>



                            <div class="card  border-top-cstm">
                                <div class="card-body">
                                    <div class="row flex-column p-3 g-4">
                                        <div class="col">
                                            <img class="img-thumbnail" src="<?= base_url('assets/img/' . $b->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col">
                                            <img class="img-thumbnail" src="<?= base_url('assets/img/' . $b->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- Tab 2 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade h-100" id="peta-tab" role="tabpanel" aria-labelledby="peta-tab" tabindex="0">
                    <div class="row d-flex h-100 py-3 g-3">
                        <div class="col rounded-3">

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm">
                                <iframe class="img-thumbnail rounded p-0 m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253285.74818424686!2d110.29180009832088!3d-7.287422096580153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708244725006cd%3A0x3027a76e352bcb0!2sKabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1699188369009!5m2!1sid!2sid" width="100%" style="border:0; object-fit:fill; height:100%;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div id="sidebar-right" class="col-3" data-aos="fade-up" data-aos-offset="0" data-aos-delay="650" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                            <div class="card-header border border-bottom-0 bg-primary rounded-top-3 p-3 w-50 mx-3">
                                <p class="text-capitalize m-0 text-center fw-bold text-white">Foto Bangunan</p>

                            </div>



                            <div class="card  border-top-cstm">
                                <div class="card-body">
                                    <div class="row g-4 pb-3">
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail" src="<?= base_url('assets/img/' . $b->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail" src="<?= base_url('assets/img/' . $b->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <table class="table table-borderless overflow-hidden rounded text-table" style="font-size: 12px; color:aliceblue;">

                                        <tbody class="glass">
                                            <?php if ($bangunan != NULL) {

                                                foreach ($bangunan as $b) {
                                                    if ($b->Memiliki_IMB == '1') {
                                                        $mem = 'Memiliki';
                                                    } else {
                                                        $mem = 'Tidak Memiliki';
                                                    }
                                                    $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');

                                                    if ($luas_lahan != NULL) {

                                                        foreach ($luas_lahan as $ln) {
                                                            if ($l = $ln->Luas_Lahan) {
                                                            } else {
                                                                $l = 0;
                                                            }
                                                        }
                                                    }

                                            ?>
                                            <?php }
                                            } ?>


                                            <tr>
                                                <th scope="row" width="25%">Nama Pemilik</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Nama_Pemilik ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Alamat</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Alamat ?>, <?= $b->Kelurahan ?> ,<?= $b->Kecamatan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kelurahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Kelurahan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kecamatan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Kecamatan ?> </td>

                                            </tr>

                                            <tr>
                                                <th scope="row" width="25%">Status IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mem ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Nomor IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Nomor_IMB ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Status Kepemilikan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Status_Kepemilikan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Fungsi</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Fungsi ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Luas Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $l ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Jumlah Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Jumlah_Lantai ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Ketinggian ?> m<sup>2</sup></td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>


                <!-- Tab 3 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade h-100" id="klas-tab" role="tabpanel" aria-labelledby="klas-tab" tabindex="0">
                    <div class="row d-flex h-100 py-3 g-3">
                        <div class="col rounded-3">

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm">
                                <table class="table table-hover table-borderless overflow-hidden">

                                    <tbody>
                                        <?php if ($bangunan != NULL) {

                                            foreach ($bangunan as $b) {
                                                if ($b->Memiliki_IMB == '1') {
                                                    $mem = 'Memiliki';
                                                } else {
                                                    $mem = 'Tidak Memiliki';
                                                }
                                                $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');

                                                if ($luas_lahan != NULL) {

                                                    foreach ($luas_lahan as $ln) {
                                                        if ($l = $ln->Luas_Lahan) {
                                                        } else {
                                                            $l = 0;
                                                        }
                                                    }
                                                }

                                        ?>
                                        <?php }
                                        } ?>


                                        <tr>
                                            <th scope="row" width="25%">Fungsi Bangunan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $b->Fungsi ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Tingkat Kompleksitas</th>
                                            <td style="width:2%">:</td>
                                            <td> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Tingkat Permanensi</th>
                                            <td style="width:2%">:</td>
                                            <td> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Tingkat Resiko Kebakaran</th>
                                            <td style="width:2%">:</td>
                                            <td> </td>

                                        </tr>

                                        <tr>
                                            <th scope="row" width="25%">Zonasi Gempa</th>
                                            <td style="width:2%">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Lokasi</th>
                                            <td style="width:2%">:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Ketinggian</th>
                                            <td style="width:2%">:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="25%">Kepemilikan</th>
                                            <td style="width:2%">:</td>
                                            <td> <?= $b->Status_Kepemilikan ?></td>

                                        </tr>




                                    </tbody>
                                </table>

                            </div>



                        </div>
                        <div id="sidebar-right" class="col-3" data-aos="fade-up" data-aos-offset="0" data-aos-delay="650" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                            <div class="card-header border border-bottom-0 bg-primary rounded-top-3 p-3 w-50 mx-3">
                                <p class="text-capitalize m-0 text-center fw-bold text-white">Foto Bangunan</p>

                            </div>



                            <div class="card  border-top-cstm">
                                <div class="card-body">
                                    <div class="row g-4 pb-3">
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail" src="<?= base_url('assets/img/' . $b->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail" src="<?= base_url('assets/img/' . $b->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <table class="table table-hover table-borderless overflow-hidden " style="font-size: 12px;">

                                        <tbody>
                                            <?php if ($bangunan != NULL) {

                                                foreach ($bangunan as $b) {
                                                    if ($b->Memiliki_IMB == '1') {
                                                        $mem = 'Memiliki';
                                                    } else {
                                                        $mem = 'Tidak Memiliki';
                                                    }
                                                    $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');

                                                    if ($luas_lahan != NULL) {

                                                        foreach ($luas_lahan as $ln) {
                                                            if ($l = $ln->Luas_Lahan) {
                                                            } else {
                                                                $l = 0;
                                                            }
                                                        }
                                                    }

                                            ?>
                                            <?php }
                                            } ?>


                                            <tr>
                                                <th scope="row" width="25%">Nama Pemilik</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Nama_Pemilik ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Alamat</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Alamat ?>, <?= $b->Kelurahan ?> ,<?= $b->Kecamatan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kelurahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Kelurahan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kecamatan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Kecamatan ?> </td>

                                            </tr>

                                            <tr>
                                                <th scope="row" width="25%">Status IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mem ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Nomor IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Nomor_IMB ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Status Kepemilikan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Status_Kepemilikan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Fungsi</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Fungsi ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Luas Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $l ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Jumlah Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Jumlah_Lantai ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Ketinggian ?> m<sup>2</sup></td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>


                <!-- Tab 4 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade h-100" id="teknis-tab" role="tabpanel" aria-labelledby="teknis-tab" tabindex="0">
                    <div class="row d-flex h-100 py-3 g-3">
                        <div class="col rounded-3">

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm overflow-scroll" style="max-height: calc(100vh - 140px);">
                            <div class="row d-flex">
                                <div class="col">
                                    <table class="table table-hover table-borderless overflow-hidden">
                                        <tbody>
                                            <?php if ($bangunan != NULL) {

                                                foreach ($bangunan as $b) {
                                                    if ($b->Memiliki_IMB == '1') {
                                                        $mem = 'Memiliki';
                                                    } else {
                                                        $mem = 'Tidak Memiliki';
                                                    }
                                                    $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');

                                                    if ($luas_lahan != NULL) {

                                                        foreach ($luas_lahan as $ln) {
                                                            if ($l = $ln->Luas_Lahan) {
                                                            } else {
                                                                $l = 0;
                                                            }
                                                        }
                                                        foreach ($luas_lahan as $ln) {
                                                            if ($ln->Kesesuaian_e_RTH == '1') {
                                                                $rth = 'Sesuai';
                                                            } else {
                                                                $rth = 'Tidak Sesuai';
                                                            }
                                                        }
                                                        foreach ($luas_lahan as $ln) {
                                                            if ($ln->antar_masa1 == '1') {
                                                                $mss = 'Sesuai';
                                                            } else {
                                                                $mss = 'Tidak Sesuai';
                                                            }
                                                        }
                                                    }

                                            ?>
                                            <?php }
                                            } ?>

                                            <tr>
                                                <th scope="row" width="25%">Diatas Drainase</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Diatas_Drainase ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Diatas_rel</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Diatas_rel ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_lantai_dasar</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_lantai_dasar ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Luas_Lantai_Dasar</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Luas_Lantai_Dasar ?> m <sup>2</sup></td>

                                            </tr>


                                            <tr>
                                                <th scope="row" width="25%">Luas_Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Luas_Lahan ?> m <sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Koefisien_Dasar</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Koefisien_Dasar ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Prosen_Koefisien_Dasar</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Prosen_Koefisien_Dasar ?> %</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_Luas_lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_Luas_lantai ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Luas_Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Luas_Lantai ?>m <sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_Jumlah_Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Ketinggian ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Jumlah_Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Jumlah_Lantai ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_Ketinggian ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Ketinggian ?> m</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">KKOP_Penerbangan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->KKOP_Penerbangan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">KKOP_Penerbangan_m</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->KKOP_Penerbangan_m ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_Daerah_Hijau</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_Daerah_Hijau ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Luas_Daerah_Hijau</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Luas_Daerah_Hijau ?> m <sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_Daerah_Hijau</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_Daerah_Hijau ?> m <sup>2</sup> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_e_RTH</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $rth ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Prosentase_erth</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Prosentase_erth ?> %</td>

                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                                <div class="col">
                                    <table class="table table-hover table-borderless overflow-hidden">
                                        <tbody>
                                            <tr>
                                                <th scope="row" width="25%">Jarak Antar Masa Bangunan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mss ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">A1</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->A1 ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">B1</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->B1 ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">antar_masa_m1</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->antar_masa_m1 ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">A2</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->A2 ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">B2</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->B2 ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">antar_masa_m2</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->antar_masa_m2 ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">A3</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->A3 ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">B3</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->B3 ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">antar_masa_m3</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->antar_masa_m3 ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_Jarak_Bangunan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_Jarak_Bangunan_m ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kesesuaian_tinggi_pagar</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kesesuaian_tinggi_pagar ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Tinggi_pagar_m</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Tinggi_pagar_m ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">memiliki_sumur_resapan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->memiliki_sumur_resapan ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kondisi_drainase</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Kondisi_drainase ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Ruang_parkir</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Ruang_parkir ?> </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                                

                            </div>



                        </div>
                        <div id="sidebar-right" class="col-3" data-aos="fade-up" data-aos-offset="0" data-aos-delay="650" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

                            <div class="card-header border border-bottom-0 bg-primary rounded-top-3 p-3 w-50 mx-3">
                                <p class="text-capitalize m-0 text-center fw-bold text-white">Foto Bangunan</p>

                            </div>



                            <div class="card  border-top-cstm">



                                <div class="card-body">
                                    <div class="row  g-3">
                                        <div class="col-md-6 pb-3   ">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $b->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $b->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <table class="table table-hover table-borderless overflow-hidden " style="font-size: 12px;">

                                        <tbody>
                                            <?php if ($bangunan != NULL) {

                                                foreach ($bangunan as $b) {
                                                    if ($b->Memiliki_IMB == '1') {
                                                        $mem = 'Memiliki';
                                                    } else {
                                                        $mem = 'Tidak Memiliki';
                                                    }
                                                    $luas_lahan = $this->Buka_peta->frd('tb_lain', $b->id, 'id_bangunan');

                                                    if ($luas_lahan != NULL) {

                                                        foreach ($luas_lahan as $ln) {
                                                            if ($l = $ln->Luas_Lahan) {
                                                            } else {
                                                                $l = 0;
                                                            }
                                                        }
                                                    }

                                            ?>
                                            <?php }
                                            } ?>


                                            <tr>
                                                <th scope="row" width="25%">Nama Pemilik</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Nama_Pemilik ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Alamat</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Alamat ?>, <?= $b->Kelurahan ?> ,<?= $b->Kecamatan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kelurahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Kelurahan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Kecamatan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Kecamatan ?> </td>

                                            </tr>

                                            <tr>
                                                <th scope="row" width="25%">Status IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mem ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Nomor IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Nomor_IMB ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Status Kepemilikan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Status_Kepemilikan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Fungsi</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $b->Fungsi ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Luas Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $l ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Jumlah Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Jumlah_Lantai ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="25%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $ln->Ketinggian ?> m<sup>2</sup></td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>





        </div>

    </div>
</div>
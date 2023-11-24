<div class="container-fluid p-0 bg-body-tertiary">
    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 85px);">
        <div class="row w-100">

            <div id="sidebar-left" class="col-2  border-end border-1 bg-body" data-aos="fade-right" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

                <!-- NAV TABS    -->
                <div class="nav flex-column nav-pills py-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vpeta-tab" data-bs-toggle="pill" data-bs-target="#peta-tab" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true"><i class="fa fa-map me-2" aria-hidden="true"></i> Peta Spasial</a>
                    <a class="nav-link nav-link-tab active primary-color m-2 btn  glass text-start" id="vprofil-tab" data-bs-toggle="pill" data-bs-target="#profil-tab" type="button" role="tab" aria-controls="profil-tab" aria-selected="false"><i class="fa fa-home me-2" aria-hidden="true"></i> Profil Kepemilikan</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vteknis-tab" data-bs-toggle="pill" data-bs-target="#teknis-tab" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa-solid fa-gear me-2"></i> Profil Bangunan</a>
                    
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vklas-tab" data-bs-toggle="pill" data-bs-target="#klas-tab" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-columns me-2" aria-hidden="true"></i> Garis Sepadan</a>
                </div>



            </div>
            <div class="col tab-content" id="myTabContent" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                <!-- Tab 1 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade show active h-100" id="profil-tab" role="tabpanel" aria-labelledby="profil-tab" tabindex="0">
                    <div class="row d-flex  py-3 g-3 h-100">
                        <div class="col rounded-3">

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm bg-white overflow-scroll">
                                <table class="table table-hover table-borderless overflow-hidden">

                                    <tbody>
                                        <?php if ($bangunan != NULL) {
                                            $nama_pemilik = $bangunan[0]->Nama_Pemilik;
                                            if ($bangunan[0]->Memiliki_IMB == '1') {
                                                $mem = 'Memiliki';
                                            } else {
                                                $mem = 'Tidak Memiliki';
                                            }
                                            if ($l = $lain[0]->Luas_Lahan) {
                                            } else {
                                                $l = 0;
                                            }
                                            if ($lain[0]->Kesesuaian_e_RTH == '1') {
                                                $rth = 'Sesuai';
                                            } else {
                                                $rth = 'Tidak Sesuai';
                                            }
                                            // if ($lain[0]->Kesesuaian_Jarak_Bangunan_m == '1') {
                                            //     $ksj = 'Sesuai';
                                            // } else {
                                            //     $ksj = 'Tidak Sesuai';
                                            // }
                                            if ($sepadan[0]->antar_masa == '1') {
                                                $mss = 'Sesuai';
                                            } else {
                                                $mss = 'Tidak Sesuai';
                                            }
                                        } ?>


                                        <tr>
                                            <th scope="row" width="40%">Nama Pemilik</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $nama_pemilik ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Alamat</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Alamat ?>, <?= $bangunan[0]->Kelurahan ?> ,<?= $bangunan[0]->Kecamatan ?> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Kelurahan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Kelurahan ?> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Kecamatan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Kecamatan ?> </td>

                                        </tr>

                                        <tr>
                                            <th scope="row" width="40%">Status IMB</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $mem ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Nomor IMB</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Nomor_IMB ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Status Kepemilikan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Status_Kepemilikan ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Fungsi</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Fungsi ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Luas Lahan</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $lain[0]->Luas_Lahan ?> m<sup>2</sup></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jumlah Lantai</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $lain[0]->Jumlah_Lantai ?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Ketinggian</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $lain[0]->Ketinggian ?> m<sup>2</sup></td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Koordinat</th>
                                            <td style="width:2%">:</td>
                                            <td><?= $bangunan[0]->Lat ?> <sup>o</sup> , <?= $bangunan[0]->Lng ?> <sup>o</sup> </td>

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
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>
                                        <div class="col">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
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
                            <div id="map" class="rounded p-0 m-0"  style="width: 100%; height: 100px;"></div>
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
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <table class="table table-borderless overflow-hidden rounded text-table" style="font-size: 12px; color:aliceblue;">

                                        <tbody class="glass">

                                            <tr>
                                                <th scope="row" width="40%">Nama Pemilik</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Nama_Pemilik ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Alamat</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Alamat ?>, <?= $bangunan[0]->Kelurahan ?> ,<?= $bangunan[0]->Kecamatan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Kelurahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Kelurahan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Kecamatan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Kecamatan ?> </td>

                                            </tr>

                                            <tr>
                                                <th scope="row" width="40%">Status IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mem ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Nomor IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Nomor_IMB ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Status Kepemilikan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Status_Kepemilikan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Fungsi</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Fungsi ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Luas Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $l ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Jumlah Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $lain[0]->Jumlah_Lantai ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $lain[0]->Ketinggian ?> m<sup>2</sup></td>

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

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm overflow-scroll">
                                <table class="table table-hover table-borderless overflow-hidden">

                                    <tbody>
                                        <?php if ($sepadan != null) {
                                            $gs_bangunan = $sepadan[0]->GS_Bangunan;
                                            $gs_pantai =$sepadan[0]->GS_Pantai;
                                            $gs_sungai =$sepadan[0]->GS_Sungai;
                                            $gs_waduk =$sepadan[0]->GS_Waduk;
                                            $gs_danau =$sepadan[0]->GS_Danau;
                                            $gs_rel =$sepadan[0]->GS_Rel;
                                            $gs_saluran =$sepadan[0]->GS_Saluran;
                                            $gs_sutet =$sepadan[0]->GS_Sutet;
                                            $gs_mataair =$sepadan[0]->GS_mataair;
                                            if ($gs_bangunan == '1') {
                                                $gs_b ="Sesuai";
                                                $gs_b_m = $sepadan[0]->GS_Bangunan_m;
                                            }else{
                                                $gs_b = "Tidak Sesuai";
                                                $gs_b_m = '0';
                                            }
                                            if ($gs_pantai == '1') {
                                                $gs_p ="Sesuai";
                                                $gs_p_m = $sepadan[0]->GS_Pantai_m;
                                            }else{
                                                $gs_p = "Tidak Sesuai";
                                                $gs_p_m = '0';
                                            }
                                            if ($gs_sungai == '1') {
                                                $gs_s ="Sesuai";
                                                $gs_s_m = $sepadan[0]->GS_Sungai_m;
                                            }else{
                                                $gs_s = "Tidak Sesuai";
                                                $gs_s_m = '0';
                                            }
                                            if ($gs_waduk == '1') {
                                                $gs_w ="Sesuai";
                                                $gs_w_m = $sepadan[0]->GS_Waduk_m;
                                            }else{
                                                $gs_w = "Tidak Sesuai";
                                                $gs_w_m = '0';
                                            }
                                            if ($gs_danau == '1') {
                                                $gs_d ="Sesuai";
                                                $gs_d_m = $sepadan[0]->GS_Danau_m;
                                            }else{
                                                $gs_d = "Tidak Sesuai";
                                                $gs_d_m = '0';
                                            }
                                            if ($gs_rel == '1') {
                                                $gs_r ="Sesuai";
                                                $gs_r_m = $sepadan[0]->GS_Rel_m;
                                            }else{
                                                $gs_r = "Tidak Sesuai";
                                                $gs_r_m = '0';
                                            }
                                            if ($gs_saluran == '1') {
                                                $gs_sal ="Sesuai";
                                                $gs_sal_m = $sepadan[0]->GS_Saluran_m;
                                            }else{
                                                $gs_sal = "Tidak Sesuai";
                                                $gs_sal_m = '0';
                                            }
                                            if ($gs_sutet == '1') {
                                                $gs_sut ="Sesuai";
                                                $gs_sut_m = $sepadan[0]->GS_Sutet_m;
                                            }else{
                                                $gs_sut = "Tidak Sesuai";
                                                $gs_sut_m = '0';
                                            }
                                            if ($gs_mataair == '1') {
                                                $gs_m ="Sesuai";
                                                $gs_m_m = $sepadan[0]->GS_mataair;
                                            }else{
                                                $gs_m = "Tidak Sesuai";
                                                $gs_m_m = '0';
                                            }
                                        }else{
                                            $gs_b = '-';
                                            $gs_b_m = '-';
                                            $gs_p = '-';
                                            $gs_p_m = '-';
                                            $gs_s = '-';
                                            $gs_s_m = '-';
                                            $gs_w = '-';
                                            $gs_w_m = '-';
                                            $gs_d = '-';
                                            $gs_d_m = '-';
                                            $gs_r = '-';
                                            $gs_r_m = '-';
                                            $gs_sal = '-';
                                            $gs_sal_m = '-';
                                            $gs_sut = '-';
                                            $gs_sut_m = '-';
                                            $gs_m = '-';
                                            $gs_m_m = '-';
                                        }
                                        ?>
                                         <tr>
                                            <th scope="row" width="40%">Jarak GS Bangunan</th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_b ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_b_m?> m</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Pantai</th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_p ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_p_m?> m</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Sungai </th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_s ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_s_m?> m</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Waduk</th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_w ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_w_m?> m</td>

                                        </tr>

                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Danau</th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_d ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_d_m?> m</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Rel Kereta </th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_r ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_r_m?> m</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Saluran</th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_sal ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_sal_m?> m</td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Jaringan Listrik SUTET</th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_sut ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_sut_m?> m</td>

                                        </tr>
                                        <tr>
                                            <th scope="row" width="40%">Jarak GS Mata Air
                                            </th>
                                            <td style="width:2%">:</td>
                                            <td width="15%"><?= $gs_m ?></td>
                                            <th class="text-start" scope="row" width="15%">Jarak</th>
                                            <td style="width:2%">:</td>
                                            <td> <?=$gs_m_m?> m</td>
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
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <table class="table table-hover table-borderless overflow-hidden " style="font-size: 12px;">

                                        <tbody>
                                            
                                            <tr>
                                                <th scope="row" width="40%">Nama Pemilik</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Nama_Pemilik ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Alamat</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Alamat ?>, <?= $bangunan[0]->Kelurahan ?> ,<?= $bangunan[0]->Kecamatan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Kelurahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Kelurahan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Kecamatan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Kecamatan ?> </td>

                                            </tr>

                                            <tr>
                                                <th scope="row" width="40%">Status IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mem ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Nomor IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Nomor_IMB ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Status Kepemilikan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Status_Kepemilikan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Fungsi</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Fungsi ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Luas Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $l ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Jumlah Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $lain[0]->Jumlah_Lantai ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $lain[0]->Ketinggian ?> m<sup>2</sup></td>

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

                            <div class="card rounded-3 bg-white h-100 p-3 border-top-cstm overflow-scroll " style="max-height: calc(100vh - 140px);">
                                <div class="row d-flex">
                                    <div class="col">
                                        <table class="table table-hover table-borderless overflow-hidden " style="font-size: 13px;">
                                            <tbody>
                                        
                                                <tr>
                                                    <th scope="row" width="50%"">Diatas Drainase</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Diatas_Drainase ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Diatas rel</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Diatas_rel ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian lantai dasar</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_lantai_dasar ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Luas Lantai Dasar</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Luas_Lantai_Dasar ?> m <sup>2</sup></td>

                                                </tr>


                                                <tr>
                                                    <th scope="row" width="50%"">Luas Lahan</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Luas_Lahan ?> m <sup>2</sup></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Koefisien Dasar</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Koefisien_Dasar ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Prosen_Koefisien_Dasar</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Prosen_Koefisien_Dasar ?> %</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian Luas lantai</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_Luas_lantai ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Luas Lantai</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Luas_Lantai ?>m <sup>2</sup></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian Jumlah Lantai</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_Jumlah_Lantai ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Jumlah Lantai</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Jumlah_Lantai ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian Ketinggian</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_Ketinggian ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Ketinggian</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Ketinggian ?> m</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">KKOP Penerbangan</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->KKOP_Penerbangan ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">KKOP Penerbangan </th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->KKOP_Penerbangan_m ?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian Daerah Hijau</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_Daerah_Hijau ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Luas Daerah Hijau</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Luas_Daerah_Hijau ?> m <sup>2</sup></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian Daerah Hijau</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_Daerah_Hijau ?> </td>

                                                </tr>



                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="col">
                                        <table class="table table-hover table-borderless overflow-hidden" style="font-size: 13px;">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian ERTH</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $rth ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Prosentase ERTH</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Prosentase_erth ?> %</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%""> Kesesuaian Jarak Antar Masa Bangunan</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $mss ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">A1</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->masaa1 ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">B1</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->masab1 ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Jarak Antar Massa</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->jarak1 ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">A2</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->masaa2 ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">B2</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->masab2 ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Jarak Antar Massa</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->jarak2 ?> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">A3</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->masaa3 ?> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">B3</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->masab3 ?> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Jarak Antar Massa</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $sepadan[0]->jarak3 ?> </td>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row" width="50%"">Kesesuaian tinggi pagar</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kesesuaian_tinggi_pagar ?> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Tinggi pagar </th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Tinggi_pagar_m ?> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">memiliki sumur resapan</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->memiliki_sumur_resapan ?> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Kondisi drainase</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Kondisi_drainase ?> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" width="50%"">Ruang parkir</th>
                                                <td style=" width:2%">:</td>
                                                    <td><?= $lain[0]->Ruang_parkir ?> </td>
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
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto1) ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                        </div>
                                        <div class="col-md-6 ">
                                            <img class="img-thumbnail border-top-cstm p-0" src="<?= base_url('assets/img/' . $bangunan[0]->foto2) ?>" alt="" width="100%" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <table class="table table-hover table-borderless overflow-hidden " style="font-size: 12px;">

                                        <tbody>
                                          


                                            <tr>
                                                <th scope="row" width="40%">Nama Pemilik</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Nama_Pemilik ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Alamat</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Alamat ?>, <?= $bangunan[0]->Kelurahan ?> ,<?= $bangunan[0]->Kecamatan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Kelurahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Kelurahan ?> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Kecamatan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Kecamatan ?> </td>

                                            </tr>

                                            <tr>
                                                <th scope="row" width="40%">Status IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $mem ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Nomor IMB</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Nomor_IMB ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Status Kepemilikan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Status_Kepemilikan ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Fungsi</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $bangunan[0]->Fungsi ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Luas Lahan</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $l ?> m<sup>2</sup></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Jumlah Lantai</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $lain[0]->Jumlah_Lantai ?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" width="40%">Ketinggian</th>
                                                <td style="width:2%">:</td>
                                                <td><?= $lain[0]->Ketinggian ?> m<sup>2</sup></td>

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
<script>
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']});
    var map = L.map('map', {
      center: [-7.021114, 110.426165],
      zoom: 12,
      fullscreenControl: true,
      fullscreenControlOptions: {
        position: 'topleft'
      },
      layers: [googleSat]});
</script>
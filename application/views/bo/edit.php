<div class="main-panel">
        <div class="content-wrapper">
        
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="card-title"><?=$judul?></h3>
                      <p class="card-description">
                      <br>
                      </p>
                    </div>
                    
                  </div>    
                  <form class="forms-sample" action="<?=base_url('Backoffice/edit_simpan/'.$spd[0]->id)?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Pemilik</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?=$bangunan[0]->Nama_Pemilik?>" placeholder="Nama Pemilik">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" class="form-control" id="alamat" value="<?=$bangunan[0]->Alamat?>" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kelurahan</label>
                               
                                <select class="form-control" id="kelurahan" name="kelurahan">
                                <option value="<?=$bangunan[0]->Kelurahan?>"><?=$bangunan[0]->Kelurahan?></option>
                                    <?php if ($desa != NULL) {
                                        foreach ($desa as $d) {
                                        ?>
                                    <option value="<?=$d->nama?>"><?=$d->nama?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kecamatan</label>
                                <select class="form-control" name="kecamatan">
                                <option value="<?=$bangunan[0]->Kecamatan?>"><?=$bangunan[0]->Kecamatan?></option>
                                    <?php if ($kec != NULL) {
                                        foreach ($kec as $k) {
                                        ?>
                                    <option value="<?=$k->nama?>"><?=$k->nama?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fungsi</label>
                               
                                <select class="form-control" name="fungsi">
                                <option value="<?=$bangunan[0]->Fungsi?>"><?=$bangunan[0]->Fungsi?></option>
                                    <option value="Hunian">Hunian</option>
                                    <option value="Sosial Budaya">Sosial Budaya</option>
                                    <option value="Industri">Industri</option>
                                    <option value="Keagamaan">Keagamaan</option>
                                    <option value="Khusus">Khusus</option>
                                    <option value="Cagar Budaya">Cagar Budaya</option>
                                    <option value="Usaha">Usaha</option>
                                    <option value="Canpuran">Campuran</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kesesuaian Bangunan</label>
                                <select class="form-control" name="kesesuaian">
                                    <option value="<?=$bangunan[0]->Kesesuaian_Bangunan?>"><?=$bangunan[0]->Kesesuaian_Bangunan?></option>
                                    <option value="Sesuai">Sesuai</option>
                                    <option value="Tidak Sesuai">Tidak Sesuai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Memiliki IMB</label>
                               
                                <select class="form-control" name="memiliki_imb">
                                    <?php $memiliki = $bangunan[0]->Memiliki_IMB;
                                    if ($memiliki == '0') {
                                        $val = 'Tidak';
                                    }else{
                                        $val ='Ya';
                                    }
                                    ?>
                                    <option value="<?=$memiliki?>"><?=$val?></option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor IMB</label>
                                <input type="text" class="form-control" value="<?=$bangunan[0]->Nomor_IMB?>" id="no_imb" name="no_imb" >
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status Kepemilikan</label>
                               
                                <select class="form-control" name="status_kepemilikan">
                                <option value="<?=$bangunan[0]->Status_Kepemilikan?>"><?=$bangunan[0]->Status_Kepemilikan?></option>
                                    <option value="SHM">SHM</option>
                                    <option value="SHGB">SHGB</option>
                                    <option value="Sewa">Sewa</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan Status Lain</label>
                                <input type="text" class="form-control" value="<?=$bangunan[0]->ket_lain?>" id="ket_lain" name="ket_lain" >
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Bangunan</label>
                                <?php $val = $spd[0]->GS_Bangunan;
                                $gs = floatval($spd[0]->GS_Bangunan_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('1','1')"  <?=$x?> class="form-check-input" type="radio" value="1" name="gs_bangunan" id="gs_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div class="form-group" id="gs1" style="display: <?=$dis?>;">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_bangunan_m" name="gs_bangunan_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('1','2')"  <?=$y?> class="form-check-input" type="radio" value="0" name="gs_bangunan" id="gs_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Pantai</label>
                                <?php $val = $spd[0]->GS_Pantai;
                                $gs = floatval($spd[0]->GS_Pantai_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('2','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_pantai" id="gs_pantai">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs2" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_pantai_m" name="gs_pantai_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('2','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_pantai" id="gs_pantai">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Sungai</label>
                                <?php $val = $spd[0]->GS_Sungai;
                                $gs = floatval($spd[0]->GS_Sungai_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('3','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_sungai" id="gs_sungai">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs3" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>"  class="form-control" id="gs_sungai_m" name="gs_sungai_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('3','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_sungai" id="gs_sungai">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Waduk</label>
                                <?php $val = $spd[0]->GS_Waduk;
                                $gs = floatval($spd[0]->GS_Waduk_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('4','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_waduk" id="gs_waduk">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs4" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>"  class="form-control" id="gs_waduk_m" name="gs_waduk_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('4','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_waduk" id="gs_waduk">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Danau</label>
                                <?php $val = $spd[0]->GS_Danau;
                                $gs = floatval($spd[0]->GS_Danau_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('5','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_danau" id="gs_danau">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs5" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_danau_m" name="gs_danau_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('5','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_danau" id="gs_danau">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Rel Kereta Api</label>
                                <?php $val = $spd[0]->GS_Rel;
                                $gs = floatval($spd[0]->GS_Rel_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('6','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_rel" id="gs_rel">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs6" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_rel_m" name="gs_rel_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('6','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_rel" id="gs_rel">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Rawa</label>
                                <?php $val = $spd[0]->GS_Rawa;
                                $gs = floatval($spd[0]->GS_Rawa_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('7','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_rawa" id="gs_rawa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs7" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_rawa_m" name="gs_rawa_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('7','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_rawa" id="gs_rawa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Saluran</label>
                                <?php $val = $spd[0]->GS_Saluran;
                                $gs = floatval($spd[0]->GS_Saluran_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('8','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_saluran" id="gs_saluran">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs8" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_saluran_m" name="gs_saluran_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('8','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_saluran" id="gs_saluran">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Jaringan Listri SUTET</label>
                                <?php $val = $spd[0]->GS_Sutet;
                                $gs = floatval($spd[0]->GS_Sutet_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('9','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_sutet" id="gs_sutet">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs9" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_sutet_m" name="gs_sutet_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('9','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_sutet" id="gs_sutet">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Mata Air</label>
                                <?php $val = $spd[0]->GS_mataair;
                                $gs = floatval($spd[0]->GS_mataair_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('10','1')" <?=$x?> class="form-check-input" type="radio" value="1" name="gs_mataair" id="gs_mataair">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs10" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_mataair_m" name="gs_mataair_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('10','2')" <?=$y?> class="form-check-input" type="radio" value="0" name="gs_mataair" id="gs_mataair">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apakah Bangunan Di Atas Drainase?</label>
                                <?php $val = $lain[0]->Diatas_Drainase;
                                
                                if ($val == 'Ya') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" <?=$x?> type="radio" name="diatas_drainase" value="Ya" id="diatas_drainase">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" <?=$y?> type="radio" name="diatas_drainase" value="Tidak" id="diatas_drainase">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apakah Bangunan Di Atas Ruang Kereta?</label>
                                <?php $val = $lain[0]->Diatas_rel;
                              
                                if ($val == 'Ya') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" <?=$x?> type="radio" name="diatas_kereta" value="Ya" id="diatas_kereta">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" <?=$y?> type="radio" name="diatas_kereta" value="Tidak" id="diatas_kereta">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                    
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Luas Lantai Dasar Bangunan</label>
                                <?php $val = $lain[0]->Kesesuaian_lantai_dasar;
                                $gs = floatval($lain[0]->Luas_Lantai_Dasar);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('11','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="gs_luas" id="gs_luas">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs11" style="display: <?=$dis?>;" class="form-group">
                                            <label for="exampleInputPassword1">Luas</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="gs_luas_m" name="gs_luas_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('11','2')" <?=$y?> class="form-check-input" type="radio" value="TIdak Sesuai" name="gs_luas" id="gs_luas">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div  class="form-group">
                                <label for="exampleInputPassword1">Luas Lahan</label>
                                <input type="text" class="form-control" value="<?=$lain[0]->Luas_Lahan?>" id="luas_lahan" name="luas_lahan">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Koefisien Dasar Bangunan</label>
                                <?php $val = $lain[0]->Koefisien_Dasar;
                                $gs = floatval($lain[0]->Prosen_Koefisien_Dasar);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('12','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="koefisien" id="koefisien">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs12" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Prosen</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="koefisien_m" name="koefisien_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('12','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="koefisien" id="koefisien">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Luas Lantai Bangunan</label>
                                <?php $val = $lain[0]->Kesesuaian_Luas_lantai;
                                $gs = floatval($lain[0]->Luas_Lantai);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('13','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="luas_bangunan" id="luas_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs13" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Luas</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="luas_bangunan_m" name="luas_bangunan_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('13','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="luas_bangunan" id="luas_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jumlah Lantai Bangunan</label>
                                <?php $val = $lain[0]->Kesesuaian_Jumlah_Lantai;
                                $gs = floatval($lain[0]->Jumlah_Lantai);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('14','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="jml_lt" id="jml_lt">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs14" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Jumlah</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="jml_lt_m" name="jml_lt_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('14','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="jml_lt" id="jml_lt">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ketinggian Bangunan</label>
                                <?php $val = $lain[0]->Kesesuaian_Ketinggian;
                                $gs = floatval($lain[0]->Ketinggian);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('15','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="tinggi_bangunan" id="tinggi_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs15" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Tinggi</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="tinggi_bangunan_m" name="tinggi_bangunan_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('15','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="tinggi_bangunan" id="tinggi_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ketentuan KKOP terhadap bangunan</label>
                                <?php $val = $lain[0]->KKOP_Penerbangan;
                                $gs = floatval($lain[0]->KKOP_Penerbangan_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('16','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="kkop" id="kkop">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs16" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="kkop_m" name="kkop_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('16','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="kkop" id="kkop">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Luas Daerah Hijau</label>
                                <?php $val = $lain[0]->Kesesuaian_Daerah_Hijau;
                                $gs = floatval($lain[0]->Luas_Daerah_Hijau);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('17','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="daerah_hijau" id="daerah_hijau">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs17" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Tinggi</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="daerah_hijau_m" name="daerah_hijau_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('17','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="daerah_hijau" id="daerah_hijau">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prosentase e RTH minimal 20%</label>
                                <?php $val = $lain[0]->Kesesuaian_e_RTH;
                                $gs = floatval($lain[0]->Prosentase_erth);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('18','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="erth" id="erth">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs18" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Prosen</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="erth_m" name="erth_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('18','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="erth" id="erth">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bangunan di Atas 3 Lt</label>
                                <?php $val = $lain[0]->tiga_lt;
                                $gs = floatval($lain[0]->tiga_lt_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('19','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="3lt" id="3lt">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs19" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="3lt_m" name="3lt_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('19','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak Sesuai" name="3lt" id="3lt">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tinggi Pagar Pekarangan</label>
                                <?php $val = $lain[0]->Kesesuaian_tinggi_pagar;
                                $gs = floatval($lain[0]->Tinggi_pagar_m);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('20','1')" <?=$x?> class="form-check-input" type="radio" value="Sesuai" name="tinggi_pagar" id="tinggi_pagar">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs20" style="display: <?=$dis?>" class="form-group">
                                            <label for="exampleInputPassword1">Prosen</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="tinggi_pagar_m" name="tinggi_pagar_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('20','2')" <?=$y?> class="form-check-input" type="radio" value="Tidak_sesuai" name="tinggi_pagar" id="tinggi_pagar">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bukaan Pintu Pekarangan</label>
                                <?php $val = $lain[0]->Bukaan_pintu;
                                
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" name="bukaan" value="Sesuai" id="bukaan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" name="bukaan" value="Tidak Sesuai" id="bukaan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apakah Sumur Memiliki Resapan?</label>
                                <?php $val = $lain[0]->memiliki_sumur_resapan;
                               
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" name="resapan" value="Ya" id="resapan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           Ya
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" <?=$y?> type="radio" name="resapan" value="Tidak" id="resapan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kondisi Drainase Pada Bangunan</label>
                                <?php $val = $lain[0]->Kondisi_drainase;
                               
                                if ($val == 'Sesuai') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" name="kondisi_drainase" value="Baik" id="kondisi_drainase">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Baik
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" name="kondisi_drainase" value="Tidak Baik" id="kondisi_drainase">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Baik
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apakah terdapat Ruang Parkir?</label>
                                <?php $val = $lain[0]->Ruang_parkir;
                               
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" name="ruang_parkir" value="1" id="ruang_parkir">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           Ya
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" <?=$y?> type="radio" name="ruang_parkir" value="0" id="ruang_parkir">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan</label>
                                <?php $val = $spd[0]->antar_masa;
                               
                                
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" name="antar_masa" value="Sesuai" id="antar_masa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" name="antar_masa" value="Tidak Sesuai" id="antar_masa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan A</label>
                                <?php $val = $spd[0]->masaa1;
                               
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" name="masa_a1" value="A" id="masa_a1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" name="masa_a1" value="0" id="masa_a1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan B</label>
                                <?php $val = $spd[0]->masab1;
                                $gs = floatval($spd[0]->jarak1);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" <?=$x?> type="radio" name="masa_b1" value="B" id="masa_b1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id= class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="masa_b1_m" name="masa_b1_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" name="masa_b1" value="0" id="masa_b1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan A</label>
                                <?php $val = $spd[0]->masaa2;
                               
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" value="A" name="masa_a2" id="masa_a2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" value="0" name="masa_a2" id="masa_a2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan B</label>
                                <?php $val = $spd[0]->masab2;
                                $gs = floatval($spd[0]->jarak2);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" <?=$x?> type="radio" value="B" name="masa_b2" id="masa_b2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id= class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="masa_b2_m" name="masa_b2_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" value="0" name="masa_b2" id="masa_b2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan A</label>
                                <?php $val = $spd[0]->masaa3;
                              
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" <?=$x?> type="radio" value="A" name="masa_a3" id="masa_a3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" value="0" name="masa_a3" id="masa_a3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jarak Antar Masa Bangunan B</label>
                                <?php $val = $spd[0]->masab3;
                                $gs = floatval($spd[0]->jarak3);
                                if ($gs != NULL || $gs > 0 ) {
                                    $dis = 'block';
                                }else{
                                    $dis = 'none';
                                }
                                if ($val == '1') {
                                    $x = "checked";
                                    $y = "";
                                }else{
                                    $x = "";
                                    $y = "checked";
                                }
                                
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" <?=$x?> type="radio" value="B" name="masa_b3" id="masa_b3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id= class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" value="<?=$gs?>" class="form-control" id="masa_b3_m" name="masa_b3_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" <?=$y?> type="radio" value="0" name="masa_b3" id="masa_b3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" class="form-control" value="<?=$lain[0]->keterangan?>" id="ket" name="ket" >
                    
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Foto 1</label>
                               
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" onchange="preview()"  id="foto1" name="foto1">
                                    
                                    </div>
                                
                                </div>
                                <div class="form-group">
                                    <img id="frame" src="<?=base_url('assets/foto/'.$lain[0]->foto1)?>" width="100px" height="100px"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Foto 2</label>
                               
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" onchange="preview2()"  id="foto2" name="foto2">
                                    
                                    </div>
                                
                                </div>
                                <div class="form-group">
                                    <img id="frame2" src="<?=base_url('assets/foto/'.$lain[0]->foto2)?>" width="100px" height="100px"/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Latitude</label>
                               
                                <div class="input-group">
                                  
                                    <input type="text" value="<?=$bangunan[0]->Lat?>" class="form-control" id="lat" name="lat" placeholder="Latitude">
                                    
                                   
                                
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Longitude</label>
                               
                               
                                    <div class="custom-file">
                                    <input type="text" value="<?=$bangunan[0]->Lng?>" class="form-control" id="lng" name="lng" placeholder="Longitude">
                                    
                                  
                                
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                           
                                <div class="col text-center px-4" style="height: 500px;">
                                
                                    <div id="map"   width="100%" style="height: 500px;"></div>
                                
                                </div>
                                
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
<script >
function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}
function preview2() {
    frame2.src=URL.createObjectURL(event.target.files[0]);
}
var osm = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }),    
map = new L.Map('map', { center: new L.LatLng(-6.9912843, 110.4199096), zoom: 13 }),
drawnItems = L.featureGroup().addTo(map);
L.control.layers({
        'google': osm.addTo(map),
        "google": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
            attribution: 'google'
        })
    }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
map.addControl(new L.Control.Draw({
  edit: {
            featureGroup: drawnItems,
            poly: {
                allowIntersection: false
            }
        },
        draw: {
            polygon: {
                allowIntersection: false,
                showArea: true
            }
        }
    }));

    map.on(L.Draw.Event.CREATED, function (event) {
        var layer = event.layer;
        var coord = layer.getLatLng();
        document.getElementById('lat').value = coord.lat;
        document.getElementById('lng').value = coord.lng;
        feature = layer.feature = layer.feature || {};
      
        feature.type = feature.type || "Feature";
        var props = feature.properties = feature.properties ;
        drawnItems.addLayer(layer);
      
     
       
    });

    map.on(L.Draw.Event.DELETED, function(e) {
    var layers = e.layers;
   
});
$(document).ready(function() {
   

  
});
</script>   
            
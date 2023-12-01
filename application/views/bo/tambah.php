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
                  <form class="forms-sample" action="<?=base_url('Backoffice/simpan')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Pemilik</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemilik">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kelurahan</label>
                               
                                <select class="form-select " id="kelurahan" name="kelurahan" style="padding: 0;">
                                <option></option>
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
                                <select class="form-select" name="kecamatan" aria-placeholder="Pilih kecamatan">
                                    <option></option>
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
                               
                                <select class="form-select" name="fungsi">
                                    <option></option>
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
                                <select class="form-select" name="kesesuaian">
                                    <option></option>
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
                               
                                <select class="form-select" name="memiliki_imb">
                                    <option></option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Status Kepemilikan</label>
                               
                                <select class="form-select" name="status_kepemilikan">
                                    <option></option>
                                    <option value="SHM">SHM</option>
                                    <option value="SHGB">SHGB</option>
                                    <option value="Sewa">Sewa</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Nomor IMB</label>
                                <input type="text" class="form-control" id="no_imb" name="no_imb" >
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan Status Lain</label>
                                <input type="text" class="form-control" id="ket_lain" name="ket_lain" >
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garis Sepadan Bangunan</label>
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('1','1')" class="form-check-input" type="radio" value="1" name="gs_bangunan" id="gs_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div class="form-group" id="gs1" style="display: none;">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_bangunan_m" name="gs_bangunan_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('1','2')" class="form-check-input" type="radio" value="0" name="gs_bangunan" id="gs_bangunan">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('2','1')" class="form-check-input" type="radio" value="1" name="gs_pantai" id="gs_pantai">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs2" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_pantai_m" name="gs_pantai_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('2','2')" class="form-check-input" type="radio" value="0" name="gs_pantai" id="gs_pantai">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('3','1')" class="form-check-input" type="radio" value="1" name="gs_sungai" id="gs_sungai">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs3" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_sungai_m" name="gs_sungai_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('3','2')" class="form-check-input" type="radio" value="0" name="gs_sungai" id="gs_sungai">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('4','1')" class="form-check-input" type="radio" value="1" name="gs_waduk" id="gs_waduk">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs4" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_waduk_m" name="gs_waduk_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('4','2')" class="form-check-input" type="radio" value="0" name="gs_waduk" id="gs_waduk">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('5','1')" class="form-check-input" type="radio" value="1" name="gs_danau" id="gs_danau">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs5" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_danau_m" name="gs_danau_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('5','2')" class="form-check-input" type="radio" value="0" name="gs_danau" id="gs_danau">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('6','1')" class="form-check-input" type="radio" value="1" name="gs_rel" id="gs_rel">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs6" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_rel_m" name="gs_rel_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('6','2')" class="form-check-input" type="radio" value="0" name="gs_rel" id="gs_rel">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('7','1')" class="form-check-input" type="radio" value="1" name="gs_rawa" id="gs_rawa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs7" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_rawa_m" name="gs_rawa_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('7','2')" class="form-check-input" type="radio" value="0" name="gs_rawa" id="gs_rawa">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('8','1')" class="form-check-input" type="radio" value="1" name="gs_saluran" id="gs_saluran">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs8" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_saluran_m" name="gs_saluran_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('8','2')" class="form-check-input" type="radio" value="0" name="gs_saluran" id="gs_saluran">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('9','1')" class="form-check-input" type="radio" value="1" name="gs_sutet" id="gs_sutet">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs9" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_sutet_m" name="gs_sutet_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('9','2')" class="form-check-input" type="radio" value="0" name="gs_sutet" id="gs_sutet">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('10','1')" class="form-check-input" type="radio" value="1" name="gs_mataair" id="gs_mataair">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs10" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="gs_mataair_m" name="gs_mataair_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('10','2')" class="form-check-input" type="radio" value="0" name="gs_mataair" id="gs_mataair">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="diatas_drainase" value="Ya" id="diatas_drainase">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="diatas_drainase" value="Tidak" id="diatas_drainase">
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
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="diatas_kereta" value="Ya" id="diatas_kereta">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="diatas_kereta" value="Tidak" id="diatas_kereta">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('11','1')" class="form-check-input" type="radio" value="Sesuai" name="gs_luas" id="gs_luas">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs11" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Luas</label>
                                            <input type="text" class="form-control" id="gs_luas_m" name="gs_luas_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('11','2')" class="form-check-input" type="radio" value="TIdak Sesuai" name="gs_luas" id="gs_luas">
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
                                <input type="text" class="form-control" id="luas_lahan" name="luas_lahan">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Koefisien Dasar Bangunan</label>
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('12','1')" class="form-check-input" type="radio" value="Sesuai" name="koefisien" id="koefisien">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs12" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Prosen</label>
                                            <input type="text" class="form-control" id="koefisien_m" name="koefisien_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('12','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="koefisien" id="koefisien">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('13','1')" class="form-check-input" type="radio" value="Sesuai" name="luas_bangunan" id="luas_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs13" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Luas</label>
                                            <input type="text" class="form-control" id="luas_bangunan_m" name="luas_bangunan_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('13','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="luas_bangunan" id="luas_bangunan">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('14','1')" class="form-check-input" type="radio" value="Sesuai" name="jml_lt" id="jml_lt">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs14" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jumlah</label>
                                            <input type="text" class="form-control" id="jml_lt_m" name="jml_lt_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('14','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="jml_lt" id="jml_lt">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('15','1')" class="form-check-input" type="radio" value="Sesuai" name="tinggi_bangunan" id="tinggi_bangunan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs15" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Tinggi</label>
                                            <input type="text" class="form-control" id="tinggi_bangunan_m" name="tinggi_bangunan_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('15','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="tinggi_bangunan" id="tinggi_bangunan">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('16','1')" class="form-check-input" type="radio" value="Sesuai" name="kkop" id="kkop">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs16" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="kkop_m" name="kkop_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('16','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="kkop" id="kkop">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('17','1')" class="form-check-input" type="radio" value="Sesuai" name="daerah_hijau" id="daerah_hijau">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs17" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Tinggi</label>
                                            <input type="text" class="form-control" id="daerah_hijau_m" name="daerah_hijau_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('17','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="daerah_hijau" id="daerah_hijau">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('18','1')" class="form-check-input" type="radio" value="Sesuai" name="erth" id="erth">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs18" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Prosen</label>
                                            <input type="text" class="form-control" id="erth_m" name="erth_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('18','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="erth" id="erth">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('19','1')" class="form-check-input" type="radio" value="Sesuai" name="3lt" id="3lt">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs19" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="3lt_m" name="3lt_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('19','2')" class="form-check-input" type="radio" value="Tidak Sesuai" name="3lt" id="3lt">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input onclick="buka('20','1')" class="form-check-input" type="radio" value="Sesuai" name="tinggi_pagar" id="tinggi_pagar">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id="gs20" style="display: none;" class="form-group">
                                            <label for="exampleInputPassword1">Prosen</label>
                                            <input type="text" class="form-control" id="tinggi_pagar_m" name="tinggi_pagar_m" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input onclick="buka('20','2')" class="form-check-input" type="radio" value="Tidak_sesuai" name="tinggi_pagar" id="tinggi_pagar">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" name="bukaan" value="Sesuai" id="bukaan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" name="bukaan" value="Tidak Sesuai" id="bukaan">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" name="resapan" value="Ya" id="resapan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           Ya
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="resapan" value="Tidak" id="resapan">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" name="kondisi_drainase" value="Baik" id="kondisi_drainase">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Baik
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" name="kondisi_drainase" value="Tidak Baik" id="kondisi_drainase">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" name="ruang_parkir" value="1" id="ruang_parkir">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           Ya
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="ruang_parkir" value="0" id="ruang_parkir">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" name="antar_masa" value="Sesuai" id="antar_masa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" name="antar_masa" value="Tidak Sesuai" id="antar_masa">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" name="masa_a1" value="A" id="masa_a1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" name="masa_a1" value="0" id="masa_a1">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="masa_b1" value="B" id="masa_b1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id= class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="masa_b1_m" name="masa_b1_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" name="masa_b1" value="0" id="masa_b1">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" value="A" name="masa_a2" id="masa_a2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" value="0" name="masa_a2" id="masa_a2">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" value="B" name="masa_b2" id="masa_b2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai ss
                                        </label>
                                        <div id= class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="masa_b2_m" name="masa_b2_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" value="0" name="masa_b2" id="masa_b2">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tidak Sesuai ss
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input  class="form-check-input" type="radio" value="A" name="masa_a3" id="masa_a3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" value="0" name="masa_a3" id="masa_a3">
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
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" value="B" name="masa_b3" id="masa_b3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sesuai
                                        </label>
                                        <div id= class="form-group">
                                            <label for="exampleInputPassword1">Jarak</label>
                                            <input type="text" class="form-control" id="masa_b3_m" name="masa_b3_m">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input  class="form-check-input" type="radio" value="0" name="masa_b3" id="masa_b3">
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
                        <input type="text" class="form-control" id="ket" name="ket" >
                    
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
                                    <img id="frame" src="<?=base_url('assets/foto/no_image.jpg')?>" width="100px" height="100px"/>
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
                                    <img id="frame2" src="<?=base_url('assets/foto/no_image.jpg')?>" width="100px" height="100px"/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Latitude</label>
                               
                                <div class="input-group">
                                  
                                    <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude">
                                    
                                   
                                
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Longitude</label>
                               
                               
                                    <div class="custom-file">
                                    <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude">
                                    
                                  
                                
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
            
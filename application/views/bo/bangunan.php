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
                    <div class="col-md-4" style="text-align: right;">
                     
                    <a href="<?=base_url('Backoffice/tambah')?>"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                    </div>
                  </div>    
                  <div class="table-responsive">
                    <table  id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pemilik</th>
                          <th>Alamat</th>
                          <th>Fungsi</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($bangunan != NULL) {
                          $i = 1;
                          foreach ($bangunan as $b) {

                          ?>
                        <tr>
                          <td class="py-1"><?=$i?></td>
                          <td><?=$b->Nama_Pemilik?></td>
                          <td><?=$b->Alamat.', Kel. '.$b->Kelurahan.', Kec. '.$b->Kecamatan?></td>
                          <td><?=$b->Fungsi?></td>
                          <td>
                              <a href="<?=base_url('Backoffice/edit/'.$b->id)?>" > <button type="button" class="btn btn-primary btn-rounded btn-icon">
                              <i class="ti-pencil"></i>
                              </button></a>
                              <button type="button" onclick="hapus(<?=$b->id?>)" class="btn btn-danger btn-rounded btn-icon">
                                <i class="ti-trash"></i>
                              </button>
                              </td>
                        </tr>
                        <?php $i++;}
                        }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
<script>
    function hapus(i) {
        if (confirm('Anda Yakin Mau Hapus Data')) {
            location.href = "<?=base_url('Backoffice/hapus_bangunan/')?>"+i;
        } else {
            return;
        }
    }
</script>
     
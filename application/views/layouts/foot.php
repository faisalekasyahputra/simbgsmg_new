 <!-- Footer -->
 <footer class="bg-dark text-light text-center fixed-bottom">
     <p class="m-0 p-1">&copy; 2023 DPUPR KOTA SEMARANG.</p>
 </footer>

  

 <!-- Add Bootstrap JS from a CDN (Optional) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
 <script>
     new DataTable('#example');
     new DataTable('#tabel2');
 </script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="<?= base_url('assets/js/grafik.js')?>"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
    $(document).ready(function() {
    $('.slc1').select2();
    $('.slc2').select2();
    $('.slc3').select2();
    $('.slc4').select2();

    $('.slc1').change(function(){
        var id =  $(this).val();
        if (id != 'Fungsi') {
            if (id != 'Semua') {
                location.href = "<?=base_url('Welcome/fungsi_spasial/')?>"+id;
            }else{
                location.href = "<?=base_url('Welcome/peta')?>";
            }
           
        }else{
            alert('Pilih Fungsi Bangunan');
        }
        
    });
});
$('.slc2').change(function(){
    var id =  $(this).val();
        if (id != 'Kepemilikan IMB') {
            if (id != 'Semua') {
                location.href = "<?=base_url('Welcome/imb/')?>"+id;
            }else{
                location.href = "<?=base_url('Welcome/imb/All')?>";
            }
        }else{
            alert('Pilih Jenis Kepemilikan');
        }

   
        
});
$('.slc3').change(function(){
    var id =  $(this).val();
        if (id != 'Garis Sepadan') {
            if (id != 'Semua') {
                if (id == '1') {
                    gs = 'GS_Bangunan';
                }else if (id == '2'){
                    gs = 'GS_Pantai';
                }else if (id == '3') {
                    gs = 'GS_Sungai';
                }else if (id == '4') {
                    gs = 'GS_Waduk';
                }else if (id == '5') {
                    gs = 'GS_Danau';
                }else if (id == '6') {
                    gs = 'GS_Rel';
                }else if (id == '7') {
                    gs = 'GS_Rawa';
                }else if (id  == '8') {
                    gs = 'GS_Saluran';
                }else if (id == '9') {
                    gs = 'GS_Sutet';
                }else if (id = '10') {
                    gs = 'GS_mataair';
                }
                location.href = "<?=base_url('Welcome/sepadan/')?>"+gs;
            }else{
                location.href = "<?=base_url('Welcome/peta')?>";
            }
        }else{
            alert('Pilih Jenis Kepemilikan');
        }

   
        
});
$('.slc4').change(function(){
    var id =  $(this).val();
        if (id != 'Prosentase e-RTH') {
            if (id != 'Semua') {
                location.href = "<?=base_url('Welcome/rth/')?>"+id;
            }else{
                location.href = "<?=base_url('Welcome/rth/All')?>";
            }
        }else{
            alert('Pilih Jenis Kepemilikan');
        }

   
        
});

 </script>

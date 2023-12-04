 <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. PUPR Pemerintah Kota Semarang</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $('.form-select').select2();
</script>

  <script>
  function buka(x,y) {
    if (x == 1) {
      if (y == 1) {
        document.getElementById("gs1").style.display ="block";
        document.getElementById("gs_bangunan_m").focus();
        document.getElementById("gs_bangunan_m").value='<?=$spd[0]->GS_Bangunan_m?>';
      }else{
        document.getElementById("gs1").style.display ="none";
        document.getElementById("gs_bangunan_m").value='0';
      }
    }else if(x==2) {
      if (y == 1) {
        document.getElementById("gs2").style.display ="block";
        document.getElementById("gs_pantai_m").focus();
      }else{
        document.getElementById("gs2").style.display ="none";
        document.getElementById("gs_pantai_m").value='0';
      }
    }else if(x==3) {
      if (y == 1) {
        document.getElementById("gs3").style.display ="block";
        document.getElementById("gs_sungai_m").focus();
      }else{
        document.getElementById("gs3").style.display ="none";
        document.getElementById("gs_sungai_m").value='0';
      }
    }else if(x==4) {
      if (y == 1) {
        document.getElementById("gs4").style.display ="block";
        document.getElementById("gs_waduk_m").focus();
      }else{
        document.getElementById("gs4").style.display ="none";
        document.getElementById("gs_waduk_m").value='0';
      }
    }else if(x==5) {
      if (y == 1) {
        document.getElementById("gs5").style.display ="block";
        document.getElementById("gs_danau_m").focus();
      }else{
        document.getElementById("gs5").style.display ="none";
        document.getElementById("gs_danau_m").value='0';
      }
    }else if(x==6) {
      if (y == 1) {
        document.getElementById("gs6").style.display ="block";
        document.getElementById("gs_rel_m").focus();
      }else{
        document.getElementById("gs6").style.display ="none";
        document.getElementById("gs_rel_m").value='0';
      }
    }else if(x==7) {
      if (y == 1) {
        document.getElementById("gs7").style.display ="block";
        document.getElementById("gs_rawa_m").focus();
      }else{
        document.getElementById("gs7").style.display ="none";
        document.getElementById("gs_rawa_m").value='0';
      }
    }else if(x==8) {
      if (y == 1) {
        document.getElementById("gs8").style.display ="block";
        document.getElementById("gs_saluran_m").focus();
      }else{
        document.getElementById("gs8").style.display ="none";
        document.getElementById("gs_saluran_m").value='0';
      }
    }else if(x==9) {
      if (y == 1) {
        document.getElementById("gs9").style.display ="block";
        document.getElementById("gs_sutet_m").focus();
      }else{
        document.getElementById("gs9").style.display ="none";
        document.getElementById("gs_sutet_m").value='0';
      }
    }else if(x==10) {
      if (y == 1) {
        document.getElementById("gs10").style.display ="block";
        document.getElementById("gs_mataair_m").focus();
      }else{
        document.getElementById("gs10").style.display ="none";
        document.getElementById("gs_mataair_m").value='0';
      }
    }else if(x==11) {
      if (y == 1) {
        document.getElementById("gs11").style.display ="block";
        document.getElementById("gs_luas_m").focus();
      }else{
        document.getElementById("gs11").style.display ="none";
        document.getElementById("gs_luas_m").value='0';
      }
    }else if(x==12) {
      if (y == 1) {
        document.getElementById("gs12").style.display ="block";
        document.getElementById("koefisien_m").focus();
      }else{
        document.getElementById("gs12").style.display ="none";
        document.getElementById("koefisien_m").value='0';
      }
    }else if(x==13) {
      if (y == 1) {
        document.getElementById("gs13").style.display ="block";
        document.getElementById("luas_bangunan_m").focus();
      }else{
        document.getElementById("gs13").style.display ="none";
        document.getElementById("luas_bangunan_m").value='0';
      }
    }else if(x==14) {
      if (y == 1) {
        document.getElementById("gs14").style.display ="block";
        document.getElementById("jml_lt_m").focus();
      }else{
        document.getElementById("gs14").style.display ="none";
        document.getElementById("jml_lt_m").value='0';
      }
    }else if(x==15) {
      if (y == 1) {
        document.getElementById("gs15").style.display ="block";
        document.getElementById("tinggi_bangunan_m").focus();
      }else{
        document.getElementById("gs15").style.display ="none";
        document.getElementById("tinggi_bangunan_m").value='0';
      }
    }else if(x==16) {
      if (y == 1) {
        document.getElementById("gs16").style.display ="block";
        document.getElementById("kkop_m").focus();
      }else{
        document.getElementById("gs16").style.display ="none";
        document.getElementById("kkop_m").value='0';
      }
    }else if(x==17) {
      if (y == 1) {
        document.getElementById("gs17").style.display ="block";
        document.getElementById("daerah_hijau_m").focus();
      }else{
        document.getElementById("gs17").style.display ="none";
        document.getElementById("daerah_hijau_m").value='0';
      }
    }else if(x==18) {
      if (y == 1) {
        document.getElementById("gs18").style.display ="block";
        document.getElementById("erth_m").focus();
      }else{
        document.getElementById("gs18").style.display ="none";
        document.getElementById("erth_m").value='0';
      }
    }else if(x==19) {
      if (y == 1) {
        document.getElementById("gs19").style.display ="block";
        document.getElementById("3lt_m").focus();
      }else{
        document.getElementById("gs19").style.display ="none";
        document.getElementById("3lt_m").value='0';
      }
    }else if(x==20) {
      if (y == 1) {
        document.getElementById("gs20").style.display ="block";
        document.getElementById("tinggi_pagar_m").focus();
      }else{
        document.getElementById("gs20").style.display ="none";
        document.getElementById("tinggi_pagar_m").value='0';
      }
    }
  }
  </script>
  <!-- plugins:js -->
  
  <!-- End custom js for this page-->

  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

 <script>
  new DataTable('#example');
 </script>
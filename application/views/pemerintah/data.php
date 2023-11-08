<div class="container-fluid p-0">
    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 85px);">
        <div class="row w-100">

            <div id="sidebar-left" class="col-2  border-end border-1 bg-body" data-aos="fade-right" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

                <!-- NAV TABS    -->
                <div class="nav flex-column nav-pills py-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link nav-link-tab active primary-color m-2 btn  glass text-start" id="vprofil-tab" data-bs-toggle="pill" data-bs-target="#profil-tab" type="button" role="tab" aria-controls="profil-tab" aria-selected="true">Profil Bangunan</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vpeta-tab" data-bs-toggle="pill" data-bs-target="#peta-tab" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Peta Spasial</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vklas-tab" data-bs-toggle="pill" data-bs-target="#klas-tab" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Klasifikasi</a>
                    <a class="nav-link nav-link-tab primary-color m-2 btn  glass text-start" id="vteknis-tab" data-bs-toggle="pill" data-bs-target="#teknis-tab" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pendataan Teknis</a>
                </div>



            </div>
    <div class="col p-3 bg-body-tertiary" >
         <div class="tab-content rounded-3 p-3 h-100 bg-white" id="myTabContent" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

            <!-- Tab 1 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade show active h-100" id="profil-tab" role="tabpanel" aria-labelledby="profil-tab" tabindex="0">
                  
                        
                            
                          
                </div>

                 <!-- Tab 2 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade h-100" id="peta-tab" role="tabpanel" aria-labelledby="peta-tab" tabindex="0" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                <iframe class="img-thumbnail rounded p-0 m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253285.74818424686!2d110.29180009832088!3d-7.287422096580153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708244725006cd%3A0x3027a76e352bcb0!2sKabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1699188369009!5m2!1sid!2sid" width="100%"  style="border:0; object-fit:fill; height:100%;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                 <!-- Tab 3 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade h-100" id="klas-tab" role="tabpanel" aria-labelledby="klas-tab" tabindex="0">
                    <canvas id="myChart3"></canvas>
                </div>

                 <!-- Tab 4 ---------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade h-100" id="teknis-tab" role="tabpanel" aria-labelledby="teknis-tab" tabindex="0">
                    <canvas id="myChart3"></canvas>
                </div>

            </div>
    </div>
           


            <div id="sidebar-right" class="col-2 border-start border-1 " data-aos="fade-left" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                <div class="row d-flex ">
                    <div class="col d-flex justify-content-center border-bottom border-1 p-2">
                        <img class="w-50 " src="<?= base_url('assets/img/logo_smkb.png') ?>" alt="">
                    </div>

                </div>
                <div class="row d-flex ">
                    <div class="col d-flex justify-content-center border-bottom border-1 p-2">
                        <p class="text-capitalize m-0 text-center"> sistem informasi penerangan jalan umum</p>
                    </div>
                </div>
                <div class="row flex-column m-auto g-2 pt-0">
                                <div class="col">
                                    <img class="img-thumbnail" src="<?= base_url('assets/img/DSC03198.jfif') ?>" alt="" width="100%" height="80%" style="object-fit: cover;">

                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="<?= base_url('assets/img/DSC03197.jfif') ?>" alt="" width="100%" style="object-fit: cover;">
                                </div>
                            </div>
            </div>
        </div>

    </div>
</div>
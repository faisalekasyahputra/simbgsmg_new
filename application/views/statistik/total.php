<section id="section-1" class="hero-section bintang" style="background-image: url(<?= base_url('/assets/img/star.svg') ?>);">
    <div class="container-fluid">
        <div class="container pt-5 h-100 d-flex flex-column justify-content-start" style="min-height: calc(100vh - 100px); ">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-6  fw-bolder judul">
                        <i class="fa fa-bar-chart me-2" aria-hidden="true"></i> </i>Statistik
                    </h1>
                    <h1 class="h5 fw-bold mb-5"><?= $title ?></h1>
                </div>
            </div>


            <div class="row justify-content-center h-50 align-items-start">

                <div class="col d-flex  justify-content-around align-items-start ">

                    <div class="row ">
                        <div class="col ">
                            <ul class="nav nav-pills d-flex flex-column " id="myTab" role="tablist">

                                <button class="nav-link nav-link-tab active primary-color m-2 btn  glass text-start" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i class="fa fa-building-o me-2" aria-hidden="true"></i>Kategori</button>


                                <button class="nav-link nav-link-tab  primary-color  m-2 btn glass text-start" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><i class="fa fa-file-text me-2" aria-hidden="true"></i> Berdasarkan Fungsi Bangunan</button>

                            </ul>

                        </div>
                    </div>
                    <div class="tab-content rounded-3 w-75  glass-nocolor border-top-cstm p-3" id="myTabContent">
                        <div class="tab-pane fade show active " style="height: 500px;" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <canvas id="myChart1"></canvas>
                        </div>
                        <div class="tab-pane fade " id="profile-tab-pane" style="height: 500px;" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <canvas id="myChart2"></canvas>
                        </div>

                    </div>

                </div>
            </div>




        </div>
    </div>

</section>
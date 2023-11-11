<section id="section-3" class="bintang" style=" background-image: url(<?=base_url('/assets/img/star.svg')?>); min-height: calc(100vh - 100px);"">
        <div class="container-fluid">
            <br>
            <div class="col text-center">
            <h1 class="h5 fw-bold mb-3"><?=$subtitle?></h1>
            </div>
            <div class="row-cols-md-4 d-flex p-0">
                <div class="col p-1">
                    <select class="form-select slc1 p-2" name="state" aria-label="Default select example">
                        <option value="<?=$pilihan[0]?>" selected><?=$pilihan[0]?></option>
                        <option value="Semua">Semua</option>
                        <option value="Hunian">Hunian</option>
                        <option value="Usaha">Usaha</option>
                        <option value="Industri">Industri</option>
                        <option value="Cagar Budaya">Cagar Budaya</option>
                        <option value="Sosial Budaya">Sosial Budaya</option>
                        <option value="Keagamaan">Keagamaan</option>
                        <option value="Khusus">Khusus</option>
                        <option value="Campuran">Campuran</option>
                      </select>
                </div>
                <div class="col p-1">
                    <select class="form-select slc2 p-2" name="state"  aria-label="Default select example">
                        <option value="<?=$pilihan[1]?>" selected><?=$pilihan[1]?></option>
                        <option value="Semua">Semua</option>
                        <option value="1">Memiliki</option>
                        <option value="0">Tidak Memiliki</option>
                       
                      </select>
                </div>
                <div class="col p-1 ">
                    <select class="form-select slc3 p-2" name="state"  aria-label="Default select example">
                    <option value="<?=$pilihan[2]?>" selected><?=$pilihan[2]?></option>
                        <option value="Semua">Semua</option>
                        <option value="1">Bangunan</option>
                        <option value="2">Pantai</option>
                        <option value="3">Sungai</option>
                        <option value="4">Waduk</option>
                        <option value="5">Danau</option>
                        <option value="6">Rel Kereta</option>
                        <option value="7">Rawa</option>
                        <option value="8">Saluran</option>
                        <option value="9">Sutet</option>
                        <option value="10">Mata Air</option>
                      </select>
                </div>
                <div class="col p-1">
                    <select class="form-select slc4 p-2" name="state"  aria-label="Default select example">
                    <option value="<?=$pilihan[3]?>" selected><?=$pilihan[3]?></option>
                        <option value="Semua">Semua</option>
                        <option value="1">Sesuai</option>
                        <option value="0">Tidak Sesuai</option>
                        
                      </select>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex align-items-center border-top-cstm justify-content-center img-thumbnail p-2 m-2">
                    
                        <div id="map" class="rounded p-0 m-0"  style="width: 100%; height: calc(  100vh - 250px);"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
    var osm = L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {});
    var Esri_WorldImagery = L.tileLayer(
      'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'
    );

    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });

    var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']});

    var baseLayers = {
      "Google Roadmap": googleStreets,
      "Google Hybrid": googleHybrid ,
      "Google Satellite": googleSat,
      "Open Street Map": osm,
      "ESRI World Imagery": Esri_WorldImagery,
    };
    function gaya_kecamatan(feature) {
        return {
            weight: '1',
            opacity: 1,
            color:'yellow',
            fillOpacity:0,
        }; 
    }
    function gaya_desa(feature) {
        return {        
            weight: '1',
            opacity: 0.5,
            fillOpacity:0,
            color : 'white',
            }; 
    }
    function onEachkec(feature, layer) {

        layer.bindTooltip(feature.properties['name'],{permanent: true, direction:"center",className: "label_kec"});
    }
    function onEachFeaturedesa(feature, layer) {

        layer.bindTooltip('Kel. '+ feature.properties['NAMOBJ'],{permanent: true, direction:"center",className: "label_des"});
    } 
    var desa= L.geoJSON([<?=$desa?>],{style:gaya_desa,onEachFeature:onEachFeaturedesa});
    var kecamatan = L.geoJSON([<?=$kecamatan?>],{style:gaya_kecamatan,onEachFeature:onEachkec});
    function marker_nya(feature, latlng) {
        <?php if ($Legenda[0] == '1') {?>
            var ico = icone(feature.properties['Fungsi']);
        <?php } else { ?>
            var ico = icone1(feature.properties['<?=$Legenda[3]?>']);
        <?php } ?>    
        var Url_nya = "<?=base_url('assets/marker/')?>"+ico;
        var Icon = L.icon({iconUrl:Url_nya,iconSize: [30],});
        var marker = L.marker(latlng, {icon:Icon});
        return marker
    }
    
    
    function popup(f,l){
        var out = [];
        var foto = f.properties['Photo1'];
        if (f.properties){
            out.length = 0;
            out.push('Pemilik : '+f.properties['Pemilik']);
            out.push('Fungsi: '+f.properties['Fungsi']);
            out.push('Nomor IMB : '+f.properties['No_IMB']);
            out.push("<center><img src='<?=base_url("assets/foto")?>/"+foto+"' width='180px' ></center>");
            out.push("<center><a href='<?=base_url("Detail/sumur/")?>"+f.properties['id']+"'  target='blank'>"+'Lihat Detail'+"</a></center>");
          l.bindPopup(out.join("<br />"));    

        }
      
} 
    var bangunan=L.geoJSON([<?=$bangunan?>], {onEachFeature:popup,pointToLayer:marker_nya,filter: function(feature, layer) {return feature.properties.show_on_map;}});
    var map = L.map('map', {
      center: [-7.021114, 110.426165],
      zoom: 12,
      fullscreenControl: true,
      fullscreenControlOptions: {
        position: 'topleft'
      },
      layers: [googleSat,bangunan,kecamatan]});

    var groupedOverlays = {
        "Administrasi": {
          "&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan": kecamatan,
          "&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan": desa,
        },
        "Bangunan": {
          "&nbsp;&nbsp;&nbsp;&nbsp;Bangunan": bangunan,
        }
      };
    L.control.groupedLayers(baseLayers,groupedOverlays,{collapsed:false}).addTo(map);

    function icone(ico) {
        if (ico == 'Hunian') {
            ico_nya = 'hunian.png';
        }else if (ico == 'Usaha'){
            ico_nya = 'usaha.png';
        }else if (ico == 'Keagamaan'){
            ico_nya ='keagamaan.png';
        }else if (ico == 'Industri'){
            ico_nya = 'industri.png';
        }else if (ico == 'Cagar Budaya'){
            ico_nya = 'cagar_budaya.png';
        }else if (ico == 'Sosial Budaya'){
            ico_nya = 'sosbud.png';
        }else if (ico == 'Khusus'){
            ico_nya = 'khusus.png';
        }else if (ico == 'Campuran'){
            ico_nya = 'campuran.png';
        }
        return ico_nya;
    }
    function icone1(ico) {
        if (ico == '0') {
            ico_nya = 'usaha.png';
        }else if (ico == '1'){
            ico_nya = 'hunian.png';
        }
        return ico_nya;
    }
    var legend = L.control({position: 'bottomleft'});
 
    legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend');
    var grades = ["Hunian","Usaha","Keagamaan","Industri","Cagar Budaya","Sosial Budaya","Khusus","Campuran"];
    var labels = ["<b>Fungsi Bangunan</b><br>"];
    var from, to;
    var icon
    for (var i = 0; i < grades.length; i++) {
        from = grades[i];
        to = grades[i + 1];
        icon = icone(grades[i]);
        url = '<?=base_url('assets/marker/')?>'+icon;
        labels.push(
        '<img style="width:20px;height=35px" src="'+url+'"+>' + grades[i]);
    }

    div.innerHTML = labels.join('<br>');
    return div;
    };

    var legend1 = L.control({position: 'bottomleft'});
 
    legend1.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend');
    var grades = ["<?=$Legenda[1]?>","<?=$Legenda[2]?>"];
    var grades1 = ["1","0"];
    var labels = ["<b>Legenda</b><br>"];
    var from, to;
    var icon
    for (var i = 0; i < grades.length; i++) {
        from = grades[i];
        to = grades[i + 1];
        icon = icone1(grades1[i]);
        url = '<?=base_url('assets/marker/')?>'+icon;
        labels.push(
        '<img style="width:20px;height=35px" src="'+url+'"+>' + grades[i]);
    }

    div.innerHTML = labels.join('<br>');
    return div;
    };
    <?php if ($Legenda[0]=='1') {?>
        legend.addTo(map);
    <?php }else{?> 
        legend1.addTo(map);
    <?php } ?>
    </script>
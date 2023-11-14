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
                  <form class="forms-sample" action="<?=base_url('Backoffice/simpan_edit_pengguna/'.$pengg[0]->id)?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Pengguna</label>
                      <input type="text" class="form-control" value="<?=$pengg[0]->username?>" id="nama" name="nama" placeholder="Nama Pemilik">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" value="<?=$pengg[0]->user_email?>" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="">No HP</label>
                      <input type="number" class="form-control" value="<?=$pengg[0]->user_contact_1?>" id="kontak" name="kontak" placeholder="Kontak">
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
            

<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Create New Sensor Coordinate</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url() ?>/leaflet.css"/>\
  <!-- Make sure you put this AFTER Leaflet's CSS -->
   <script src="<?= base_url() ?>/leaflet.js"></script>
<section class="section">
    <div class="section-header">
    <div class="section-header-back">
        <a href="<?=site_url('sensor') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Create New Sensor</h1>
    <div class="section-header-button">

    </div>
  </div>
  <div class="section-body">
    <div class="card">
    <div class="card-header">
      <h4>New Sensor</h4>
    </div>

    <div class="card-body col-md-6">
      <form action="<?= site_url('sensor') ?>" method="post" autocomplete="off" >
        <?= csrf_field() ?>
        <div class="form-group">
          <label>Nama Sensor *</label>
          <input type="text" class="form-control" name="nama_sensor" required autofocus>
        </div>
        <div class="form-group">
          <label>Latitude *</label>
          <input type="text" class="form-control" id="latitude" name="latitude" required autofocus>
        </div>
        <div class="form-group">
          <label>Longitude*</label>
          <input type="text" class="form-control" id="longitude" name="longitude" required autofocus>
        </div>
        <div class="form-group">
          <label>Status</label>
        <input type="text" class="form-control" name="status" >
        </div>
        <div>
          <div class="form-group">
            <label>Kelembaban / Suhu</label>
            <input type="text" class="form-control" name="humid_suhu" >
          </div>
          <div>
          <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
      <br>
      <div class="col-md-12 col-lg-12" >
        <div class="card">
          <div class="card-header">
            <h4>Select Latitude and longitude</h4>
          </div>
          <div class="card-body">
          <div id="maps" style="height: 400px; width:700px;"></div>
          <br>
          <script>
          var map = L.map('maps').setView({ lat : 0.7893, lon : 113.9213  }, 5);
              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  maxZoom: 19,
                  attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
              }).addTo(map);
              var latInput = document.querySelector("[name=latitude]");
              var lngInput = document.querySelector("[name=longitude]");

              var curLocation = [0.7893, 113.9213];

              map.attributionControl.setPrefix(false);
              var marker = new L.marker(curLocation, {
                draggable: 'true',

              });
              marker.on('dragend', function(event){
                var position = marker.getLatLng();
                marker.setLatLng(position, {
                  draggable: 'true',

                }).bindPopup(position).update();
                $("#latitude").val(position.lat);
                $("#longitude").val(position.lng);
              });
              map.addLayer(marker);

              map.on("click", function(e){
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;
                if (!marker) {
                  marker = L.marker(e.latlng).addTo(map);
                }else{
                  marker.setLatLng(e.latlng);
                }
                latInput.value=lat;
                lngInput.value=lng;
              });
          </script>

          </div>
        </div>

  </div>
</div>
</div>
</section>
<?= $this->endSection() ?>

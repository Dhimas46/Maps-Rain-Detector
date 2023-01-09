
<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Maps</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url() ?>/leaflet.css"/>\
  <!-- Make sure you put this AFTER Leaflet's CSS -->
   <script src="<?= base_url() ?>/leaflet.js"></script>
<section class="section">
  <div class="section-header">
    <h1>Maps</h1>
  </div>
  <div class="section-body">
    <div class="card">
    <div class="card-header">
      <h4>Sensor Location</h4>
    </div>

    <div class="card-body table-responsive">
      <form id="ServiceRequest" action="" method='post'>
               <div class="form-group">
                    <div class="text-lg-center alert-danger"id="info"></div>
                    <div id="maps" style="height: 400px; width:1150px;"></div>
                    </div>
  </div>
  <script>
//   var greenIcon = L.icon({
//     iconUrl: 'leaf-green.png',
//     shadowUrl: 'leaf-shadow.png',
//
//     iconSize:     [38, 95], // size of the icon
//     shadowSize:   [50, 64], // size of the shadow
//     iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
//     shadowAnchor: [4, 62],  // the same for the shadow
//     popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
// });

  var maps = L.map('maps').setView({ lat : 0.7893, lon : 113.9213  }, 5);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
      }).addTo(maps);
      <?php
        foreach($sensor as $key => $data){ ?>
      L.marker([<?=$data->latitude?>,<?=$data->longitude ?>]).bindPopup('Sensor : <?=$data->nama_sensor ?><br>Weather Condition : <b><?=$data->status?></b> <br>Humidity dan Temperature : <b><?=$data->humid_suhu ?></b>').addTo(maps);
       <?php } ?>
  </script>
</section>
<?= $this->endSection() ?>

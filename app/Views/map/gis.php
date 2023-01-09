<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/leaflet.css"/>
     <script src="<?= base_url() ?>/leaflet.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
       <img src="<?=base_url()?>/template/cuaca.svg" width="50" height="50" >
       Weather Monitoring System
     </a>
    <form action="" class="form-inline" method="post" autocomplete="off">
   <input name="keyword" value="" class="form-control mr-sm-2" type="text" placeholder="Search Area" aria-label="Search">
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 </form>
    </nav>
  </header>

  <div>
      <div id="maps" style="height: 670px; width:1519px;"></div>
  </div>
<script>

var maps = L.map('maps').setView({ lat : 0.7893, lon : 113.9213  }, 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(maps);
    <?php
      foreach($sensor as $key => $data){ ?>
    L.marker([<?=$data->latitude?>,<?=$data->longitude ?>]).bindPopup('Location : <?=$data->nama_sensor ?><br>Weather Condition : <?=$data->status ?>').addTo(maps);
     <?php } ?>
</script>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/custom.js"></script>
</body>
</html>

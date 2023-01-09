<li class="menu-header">Main Menu</li>

<li> <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
<li> <a href="<?= site_url('sensor') ?>" class="nav-link"><i class="fas fa-map-marker-alt"></i><span>Coordinate Sensor</span></a></li>
<li class="nav-item dropdown">
  <a href="#" class="nav-link has-dropdown"><i class="fas fa-map"></i> <span>Maps</span></a>
  <ul class="dropdown-menu">
    <li> <a href="<?= site_url('maps') ?>" class="nav-link"><span>Goggle Maps</span></a></li>
    <li> <a href="<?= site_url('maps/leaflet') ?>" class="nav-link"><span>Leaflet Maps</span></a></li>
    <li> <a href="<?= site_url('maps/gis') ?>" class="nav-link"><span>User Maps</span></a></li>
  </ul>
</li>

  <!-- <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="far fa-address-book"></i><span>Kontak</span></a>
  <ul class="dropdown-menu">
    <li><a class="nav-link" href="<?=site_url('services') ?>">Add Coordinate</a></li>
    <li><a class="nav-link" href="">Kontak Saya</a></li>
  </ul>
</li> -->
<!-- <li class="nav-item dropdown">
  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span>Undangan</span></a>
  <ul class="dropdown-menu">
    <li><a class="nav-link" href="">Saya Mengundang</a></li>
    <li><a class="nav-link" href="">Saya Diundang</a></li>
  </ul>
</li> -->

</ul>

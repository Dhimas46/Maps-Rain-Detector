
<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Edit Sensor Coordinate</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
        <a href="<?=site_url('sensor') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit Sensor</h1>
    <div class="section-header-button">

    </div>
  </div>
  <div class="section-body">
    <div class="card">
    <div class="card-header">
      <h4>Edit Sensor</h4>
    </div>
    <div class="card-body col-md-6">
      <form action="<?= site_url('sensor/'.$sensor->id_sensor) ?>" method="post" autocomplete="off" >
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label>Nama Sensor *</label>
          <input type="text" value="<?= $sensor->nama_sensor?>" class="form-control" name="nama_sensor" required>
        </div>
        <div class="form-group">
          <label>Latitude *</label>
          <input type="text" value="<?= $sensor->latitude?>" class="form-control" name="latitude" required>
        </div>
        <div class="form-group">
          <label>Longitude *</label>
          <input type="text" value="<?= $sensor->longitude?>" class="form-control" name="longitude" required>
        </div>
        <div class="form-group">
          <label>Status</label>
          <input class="form-control" value="<?= $sensor->status?>" name="status"></input>
        </div>
        <div>
          <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
  </div>
</div>
</div>
</section>
<?= $this->endSection() ?>

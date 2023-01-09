
<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Sensor</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <h1>Sensor</h1>
    <div class="section-header-button">
      <a href="<?=site_url('sensor/add') ?>" class="btn btn-primary">Add New</a>

    </div>
  </div>
  <?php if(session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Success !</b>
        <?=session()->getFlashdata('success')?>
      </div>
    </div>
  <?php endif; ?>
  <?php if(session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Error !</b>
        <?=session()->getFlashdata('error')?>
      </div>
    </div>
  <?php endif; ?>
  <div class="section-body">
    <div class="card">
    <div class="card-header">
      <h4>Data Sensor</h4>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-striped table-md">
        <tbody><tr>
          <th>#</th>
          <th>Nama Sensor</th>
          <th>Latitude</th>
          <th>Longitude</th>
          <th>Status</th>
          <th>Kelembaban dan Suhu</th>
          <th>Action</th>
        </tr>
        <?php foreach($sensor as $key => $value) : ?>
        <tr>
          <td><?=$key + 1 ?></td>
          <td><?=$value->nama_sensor?></td>
          <td><?=$value->latitude?></td>
          <td><?=$value->longitude?></td>
          <td><?=$value->status?></td>
          <td><?=$value->humid_suhu?></td>
          <td class="text-center" style="width:15%">
            <a href="<?= site_url('sensor/edit/'.$value->id_sensor) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <form onsubmit="return confirm('Yakin ingin Dihapus?')" class="d-inline" action="<?= site_url('sensor/'.$value->id_sensor) ?>" method="post">
              <?= csrf_field() ?>
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>

          </td>
        </tr>
      <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>
</div>
</section>
<?= $this->endSection() ?>

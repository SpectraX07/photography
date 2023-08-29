<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Plyr
</h4>
<div class="row">
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Video</h5>
      <div class="card-body">
        <video class="w-100" poster="<?= ADMIN_ASSETS ?>assets/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="plyr-video-player" playsinline="" controls=""><source src="<?= ADMIN_ASSETS ?>assets/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4"></video>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Audio</h5>
      <div class="card-body">
        <audio class="w-100" id="plyr-audio-player" controls=""><source src="<?= ADMIN_ASSETS ?>assets/audio/Water_Lily.mp3" type="audio/mp3"></audio>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/plyr/plyr.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/plyr/plyr.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/js/extended-ui-media-player.js"></script>
<?= $this->endSection() ?>

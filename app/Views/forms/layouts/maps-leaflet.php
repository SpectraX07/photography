<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Maps /</span> Leaflet
</h4>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Basic Map</h5>
      <div class="card-body">
        <div class="leaflet-map" id="basicMap"></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Marker Circle & Polygon</h5>
      <div class="card-body">
        <div class="leaflet-map" id="shapeMap"></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Draggable Marker With Popup</h5>
      <div class="card-body">
        <div class="leaflet-map" id="dragMap"></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">User Location</h5>
      <div class="card-body">
        <div class="leaflet-map" id="userLocation"></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Custom Icons</h5>
      <div class="card-body">
        <div class="leaflet-map" id="customIcons"></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">GeoJson</h5>
      <div class="card-body">
        <div class="leaflet-map" id="geoJson"></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Layer Control</h5>
      <div class="card-body">
        <div class="leaflet-map" id="layerControl"></div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/leaflet/leaflet.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/leaflet/leaflet.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/js/maps-leaflet.js"></script>
<?= $this->endSection() ?>


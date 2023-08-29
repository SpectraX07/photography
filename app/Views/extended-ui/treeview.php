<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="fw-light text-muted">Extended UI /</span> Treeview
</h4>
<div class="row">
  <div class="col-md-6 col-12">
    <div class="card mb-4">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <div id="jstree-basic">
          <ul>
            <li data-jstree='{"icon" : "ti ti-folder"}'>
              css
              <ul>
                <li data-jstree='{"icon" : "ti ti-folder"}'>
                  app.css
                </li>
                <li data-jstree='{"icon" : "ti ti-folder"}'>
                  style.css
                </li>
              </ul>
            </li>
            <li class="jstree-open" data-jstree='{"icon" : "ti ti-folder"}'>
              img
              <ul data-jstree='{"icon" : "ti ti-folder"}'>
                <li data-jstree='{"icon" : "ti ti-folder"}'>
                  bg.jpg
                </li>
                <li data-jstree='{"icon" : "ti ti-folder"}'>
                  logo.png
                </li>
                <li data-jstree='{"icon" : "ti ti-folder"}'>
                  avatar.png
                </li>
              </ul>
            </li>
            <li class="jstree-open" data-jstree='{"icon" : "ti ti-folder"}'>
              js
              <ul>
                <li data-jstree='{"icon" : "ti ti-folder"}'>jquery.js</li>
                <li data-jstree='{"icon" : "ti ti-folder"}'>app.js</li>
              </ul>
            </li>
            <li data-jstree='{"icon" : "ti ti-file-text"}'>
              index.html
            </li>
            <li data-jstree='{"icon" : "ti ti-file-text"}'>
              page-one.html
            </li>
            <li data-jstree='{"icon" : "ti ti-file-text"}'>
              page-two.html
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-12">
    <div class="card mb-4">
      <h5 class="card-header">Custom Icons</h5>
      <div class="card-body">
        <div id="jstree-custom-icons"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-12">
    <div class="card mb-4">
      <h5 class="card-header">Context Menu</h5>
      <div class="card-body">
        <div id="jstree-context-menu" class="overflow-auto"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-12">
    <div class="card mb-4">
      <h5 class="card-header">Drag & Drop</h5>
      <div class="card-body">
        <div id="jstree-drag-drop" class="overflow-auto"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-12">
    <div class="card mb-md-0 mb-4">
      <h5 class="card-header">Checkboxes</h5>
      <div class="card-body">
        <div id="jstree-checkbox"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-12">
    <div class="card">
      <h5 class="card-header">Ajax</h5>
      <div class="card-body">
        <div id="jstree-ajax"></div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/jstree/jstree.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/jstree/jstree.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/js/extended-ui-treeview.js"></script>
<?= $this->endSection() ?>

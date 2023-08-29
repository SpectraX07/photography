<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Forms /</span> Extras
</h4>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Autosize</h5>
      <div class="card-body">
        <textarea id="autosize-demo" rows="3" class="form-control"></textarea>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">CleaveJS Input Mask</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
            <label class="form-label" for="creditCardMask">Credit Card</label>
            <div class="input-group input-group-merge">
              <input type="text" id="creditCardMask" name="creditCardMask" class="form-control credit-card-mask" placeholder="1356 3215 6548 7898" aria-describedby="creditCardMask2">
              <span class="input-group-text cursor-pointer p-1" id="creditCardMask2"><span class="card-type"></span></span>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
            <label class="form-label" for="phone-number-mask">Phone Number</label>
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="phone-number-mask" class="form-control phone-number-mask" placeholder="202 555 0111">
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
            <label class="form-label" for="date-mask">Date</label>
            <input type="text" id="date-mask" class="form-control date-mask" placeholder="YYYY-MM-DD">
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
            <label class="form-label" for="time-mask">Time</label>
            <input type="text" id="time-mask" class="form-control time-mask" placeholder="hh:mm:ss">
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
            <label class="form-label" for="numeral-mask">Numeral formatting</label>
            <input type="text" id="numeral-mask" class="form-control numeral-mask" placeholder="Enter Numeral">
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
            <label class="form-label" for="block-mask">Blocks</label>
            <input type="text" id="block-mask" class="form-control block-mask" placeholder="Blocks [4, 3, 3]">
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4 mb-xl-0">
            <label class="form-label" for="delimiter-mask">Delimiters</label>
            <input type="text" id="delimiter-mask" class="form-control delimiter-mask" placeholder="Delimiter: '.'">
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-4 mb-xl-0">
            <label class="form-label" for="custom-delimiter-mask">Custom Delimiters</label>
            <input type="text" id="custom-delimiter-mask" class="form-control custom-delimiter-mask" placeholder="Delimiter: ['.', '.', '-']">
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <label class="form-label" for="prefix-mask">Prefix</label>
            <input type="text" id="prefix-mask" class="form-control prefix-mask">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Bootstrap Maxlength</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-12 mb-4">
            <label class="form-label" for="bootstrap-maxlength-example1">Input</label>
            <input type="text" id="bootstrap-maxlength-example1" class="form-control bootstrap-maxlength-example" maxlength="25">
          </div>
          <div class="col-12">
            <label class="form-label" for="bootstrap-maxlength-example2">Textarea</label>
            <textarea id="bootstrap-maxlength-example2" class="form-control bootstrap-maxlength-example" rows="3" maxlength="255"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Form Repeater</h5>
      <div class="card-body">
        <form class="form-repeater">
          <div data-repeater-list="group-a">
            <div data-repeater-item="">
              <div class="row">
                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-1">Username</label>
                  <input type="text" id="form-repeater-1-1" class="form-control" placeholder="john.doe">
                </div>
                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-2">Password</label>
                  <input type="password" id="form-repeater-1-2" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                </div>
                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-3">Gender</label>
                  <select id="form-repeater-1-3" class="form-select">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-4">Profession</label>
                  <select id="form-repeater-1-4" class="form-select">
                    <option value="Designer">Designer</option>
                    <option value="Developer">Developer</option>
                    <option value="Tester">Tester</option>
                    <option value="Manager">Manager</option>
                  </select>
                </div>
                <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                  <button class="btn btn-label-danger mt-4" data-repeater-delete="">
                    <i class="ti ti-x ti-xs me-1"></i>
                    <span class="align-middle">Delete</span>
                  </button>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="mb-0">
            <button class="btn btn-primary" data-repeater-create="">
              <i class="ti ti-plus me-1"></i>
              <span class="align-middle">Add</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/autosize/autosize.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/js/forms-extras.js"></script>
<?= $this->endSection() ?>

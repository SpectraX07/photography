<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Avatar
</h4>
<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Sizes</h5>
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar avatar-xs me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar avatar-sm me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar avatar-md me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar avatar-lg me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar avatar-xl">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Initials</h5>
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar avatar-xs me-2">
            <span class="avatar-initial rounded-circle bg-primary">pi</span>
          </div>
          <div class="avatar avatar-sm me-2">
            <span class="avatar-initial rounded-circle bg-secondary">pi</span>
          </div>
          <div class="avatar me-2">
            <span class="avatar-initial rounded-circle bg-success">pi</span>
          </div>
          <div class="avatar avatar-md me-2">
            <span class="avatar-initial rounded-circle bg-danger">pi</span>
          </div>
          <div class="avatar avatar-lg me-2">
            <span class="avatar-initial rounded-circle bg-warning">pi</span>
          </div>
          <div class="avatar avatar-xl">
            <span class="avatar-initial rounded-circle bg-info">pi</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Label Initials</h5>
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar avatar-xs me-2">
            <span class="avatar-initial rounded-circle bg-label-primary">pi</span>
          </div>
          <div class="avatar avatar-sm me-2">
            <span class="avatar-initial rounded-circle bg-label-secondary">pi</span>
          </div>
          <div class="avatar me-2">
            <span class="avatar-initial rounded-circle bg-label-success">pi</span>
          </div>
          <div class="avatar avatar-md me-2">
            <span class="avatar-initial rounded-circle bg-label-danger">pi</span>
          </div>
          <div class="avatar avatar-lg me-2">
            <span class="avatar-initial rounded-circle bg-label-warning">pi</span>
          </div>
          <div class="avatar avatar-xl me-2">
            <span class="avatar-initial rounded-circle bg-label-info">pi</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Shapes</h5>
      <div class="card-body">
        <div class="d-flex align-items-center my-3">
          <div class="avatar me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar me-2">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Status Indicator</h5>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar me-2 avatar-online">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/8.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar me-2 avatar-away">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar me-2 avatar-busy">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar avatar-offline">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Lable Avatar Status Indicator</h5>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar me-2 avatar-online">
            <span class="avatar-initial rounded-circle bg-label-success">pi</span>
          </div>
          <div class="avatar me-2 avatar-away">
            <span class="avatar-initial rounded-circle bg-label-warning">pi</span>
          </div>
          <div class="avatar me-2 avatar-busy">
            <span class="avatar-initial rounded-circle bg-label-primary">pi</span>
          </div>
          <div class="avatar me-2 avatar-offline">
            <span class="avatar-initial rounded-circle bg-label-secondary">pi</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Avatar Group -->
<div class="card">
  <h5 class="card-header">Avatar Group</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <small class="text-light fw-semibold">Default</small>
        <div class="d-flex align-items-center avatar-group my-3">
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/10.png" alt="Avatar" class="rounded-circle">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <small class="text-light fw-semibold">Pull Up</small>
        <div class="d-flex align-items-center avatar-group my-3">
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/12.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/6.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/10.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <small class="text-light fw-semibold">Pull Up with Tooltip</small>
        <ul class="list-unstyled m-0 d-flex align-items-center avatar-group my-3">
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
            <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="Avatar">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
            <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/12.png" alt="Avatar">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
            <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/6.png" alt="Avatar">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar pull-up">
            <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/10.png" alt="Avatar">
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <small class="text-light fw-semibold">Avatar with count </small>
        <div class="d-flex align-items-center avatar-group my-3">
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/12.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
          <div class="avatar">
            <img src="<?= ADMIN_ASSETS ?>assets/img/avatars/6.png" alt="Avatar" class="rounded-circle pull-up">
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
<?= $this->endSection() ?>

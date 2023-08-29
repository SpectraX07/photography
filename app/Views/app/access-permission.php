<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-semibold mb-4">Permissions List</h4>
<p class="mb-4">Each category (Basic, Professional, and Business) includes the four predefined roles shown below.</p>
<div class="card">
	<div class="card-datatable table-responsive">
		<table class="datatables-permissions table border-top">
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th>Name</th>
					<th>Assigned To</th>
					<th>Created Date</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-3 p-md-5">
			<button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<div class="text-center mb-4">
					<h3 class="mb-2">Add New Permission</h3>
					<p class="text-muted">Permissions you may use and assign to your users.</p>
				</div>
				<form id="addPermissionForm" class="row" onsubmit="return false">
					<div class="col-12 mb-3">
						<label class="form-label" for="modalPermissionName">Permission Name</label>
						<input type="text" id="modalPermissionName" name="modalPermissionName" class="form-control" placeholder="Permission Name" autofocus="">
					</div>
					<div class="col-12 mb-2">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="corePermission">
							<label class="form-check-label" for="corePermission">
								Set as core permission
							</label>
						</div>
					</div>
					<div class="col-12 text-center demo-vertical-spacing">
						<button type="submit" class="btn btn-primary me-sm-3 me-1">Create Permission</button>
						<button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Discard</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-3 p-md-5">
			<button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<div class="text-center mb-4">
					<h3 class="mb-2">Edit Permission</h3>
					<p class="text-muted">Edit permission as per your requirements.</p>
				</div>
				<div class="alert alert-warning" role="alert">
					<h6 class="alert-heading mb-2">Warning</h6>
					<p class="mb-0">By editing the permission name, you might break the system permissions functionality. Please ensure you're absolutely certain before proceeding.</p>
				</div>
				<form id="editPermissionForm" class="row" onsubmit="return false">
					<div class="col-sm-9">
						<label class="form-label" for="editPermissionName">Permission Name</label>
						<input type="text" id="editPermissionName" name="editPermissionName" class="form-control" placeholder="Permission Name" tabindex="-1">
					</div>
					<div class="col-sm-3 mb-3">
						<label class="form-label invisible d-none d-sm-inline-block">Button</label>
						<button type="submit" class="btn btn-primary mt-1 mt-sm-0">Update</button>
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="editCorePermission">
							<label class="form-check-label" for="editCorePermission">
								Set as core permission
							</label>
						</div>
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
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
	<script src="<?= ADMIN_ASSETS ?>assets/js/app-access-permission.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-add-permission.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-edit-permission.js"></script>
<?= $this->endSection() ?>

<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="card p-4">
			<div class="table-responsive text-nowrap">
				<table class='table' id="ajaxDtSuperAdmin">
					<?= csrf_field(); ?>
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Gender</th>
							<th>Status</th>
							<th>Created At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					</tbody>

				</table>
			</div>
		</div>

	</div>
</div>
<div class="offcanvas offcanvas-end w-50" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="addAdminCanvas" aria-labelledby="addAdminCanvasLabel">
	<div class="offcanvas-header">
		<h5 id="addAdminCanvasLabel" class="offcanvas-title">Add Super Admin</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
		<?= form_open('/admin/users/save-super-admin', ['id' => 'addSuperAdminForm', 'class' => 'row g-3']); ?>
		<div class="col-12 col-md-6">
			<label class="form-label">Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter name">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Phone</label>
			<input type="text" name="phone" class="form-control" placeholder="Enter phone no">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12">
			<label class="form-label">Email</label>
			<input type="text" name="email" class="form-control" placeholder="Enter email">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Username</label>
			<input type="text" name="username" class="form-control" placeholder="Enter username">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Gender</label>
			<select class="select2 form-select" data-label="Select a gender" name="gender">
				<option value=""></option>
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
			<span name="gender"></span>
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Password</label>
			<input type="text" name="password" class="form-control" placeholder="Enter password">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Confirm Password</label>
			<input type="text" name="confirm_password" class="form-control" placeholder="Enter confirm password">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12">
			<label class="form-label">Profile Picture <small class="text-muted">(Image dimensions should be set to 100 x 100 pixels.)</small></label>
			<input class="form-control" name="image" type="file">
			<div class="invalid-feedback"></div>
		</div>

		<div class="col-12 text-end">
			<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
		</div>
		<?= form_close(); ?>
	</div>
</div>

<div class="offcanvas offcanvas-end w-50" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="editAdminCanvas" aria-labelledby="editAdminCanvasLabel">
	<div class="offcanvas-header">
		<h5 id="editAdminCanvasLabel" class="offcanvas-title">Update Super Admin</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
		<?= form_open('/admin/users/update-super-admin', ['id' => 'editSuperAdminForm', 'class' => 'row g-3']); ?>
		<div class="col-12 col-md-6">
			<label class="form-label">Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter name">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Phone</label>
			<input type="text" name="phone" class="form-control" placeholder="Enter phone no">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12">
			<label class="form-label">Email</label>
			<input type="text" name="email" class="form-control" placeholder="Enter email">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Username</label>
			<input type="text" name="username" class="form-control" placeholder="Enter username">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-12 col-md-6">
			<label class="form-label">Gender</label>
			<select class="select2 form-select" data-label="Select a gender" name="gender">
				<option value=""></option>
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
			<span name="gender"></span>
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-11">
			<label class="form-label">Profile Picture</label>
			<input class="form-control" name="image" type="file">
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-1 mt-4">
			<div class="avatar mt-3">
				<img class="imageHolder" src="" alt="Avatar">
			</div>
		</div>
		<div class="col-12 text-end">
			<input type="hidden" name='id'>
			<input type="hidden" name='old_image'>
			<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
		</div>
		<?= form_close(); ?>
	</div>
</div>
<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-simple modal-add-new-edit">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="edit-title mb-2">Edit User</h3>
				</div>
				
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="updateUserPasswordModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="mb-2">Update Password</h3>
				</div>
				<?= form_open('/admin/users/update-password', ['id' => 'updateUserPasswordForm', 'class' => 'row g-3']); ?>
				<div class="col-12 col-md-12">
					<label class="form-label">New Password</label>
					<input type="password" class="form-control" name="new_password">
					<div class="invalid-feedback"></div>
				</div>

				<div class="col-12 col-md-12">
					<label class="form-label">Confirm Password</label>
					<input type="password" class="form-control" name="confirm_password">
					<div class="invalid-feedback"></div>
				</div>

				<div class="col-12 text-center">
					<input type="hidden" name='id'>
					<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
					<button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
				</div>
				<?= form_close() ?>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
<script src="<?= ADMIN_ASSETS ?>assets/js/page/super-admin.js"></script>
<?= $this->endSection() ?>
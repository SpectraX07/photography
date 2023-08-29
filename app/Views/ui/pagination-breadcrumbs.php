<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
	<span class="text-muted fw-light">UI elements /</span> Pagination and breadcrumbs
</h4>
<div class="card mb-4">
	<h5 class="card-header">Pagination</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6">
				<small class="text-light fw-semibold">Basic</small>
				<div class="demo-inline-spacing">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li class="page-item first">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
							</li>
							<li class="page-item last">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
					<nav aria-label="Page navigation">
						<ul class="pagination pagination-borderless">
							<li class="page-item first">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
							</li>
							<li class="page-item last">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-lg-6">
				<small class="text-light fw-semibold">Basic Pagination Shape</small>
				<div class="demo-inline-spacing">
					<nav aria-label="Page navigation">
						<ul class="pagination pagination-round pagination-secondary">
							<li class="page-item first">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
							</li>
							<li class="page-item last">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
					<nav aria-label="Page navigation">
						<ul class="pagination pagination-square pagination-secondary">
							<li class="page-item first">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
							</li>
							<li class="page-item last">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-0">
</div>
<div class="card mb-4">
	<h5 class="card-header">Sizes & Alignments</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-4">
				<small class="text-light fw-semibold">Sizes</small>
				<div class="demo-inline-spacing">
					<nav aria-label="Page navigation">
						<ul class="pagination pagination-sm">
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="tf-icon fs-6 ti ti-chevrons-left"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="tf-icon fs-6 ti ti-chevrons-right"></i></a>
							</li>
						</ul>
					</nav>
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
					<nav aria-label="Page navigation">
						<ul class="pagination pagination-lg">
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="tf-icon ti ti-chevrons-left ti-sm"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="tf-icon ti ti-chevrons-right ti-sm"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-lg-8">
				<small class="text-light fw-semibold">Alignments</small>
				<div class="demo-inline-spacing">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center">
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-end">
							<li class="page-item prev">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="javascript:void(0);">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">5</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mb-4">
	<h5 class="card-header">Pagination Color Options</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6">
				<nav aria-label="Page navigation">
					<ul class="pagination pagination-primary">
						<li class="page-item first">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
						</li>
						<li class="page-item prev">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="javascript:void(0);">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">5</a>
						</li>
						<li class="page-item next">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
						</li>
						<li class="page-item last">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-6">
				<nav aria-label="Page navigation">
					<ul class="pagination pagination-secondary">
						<li class="page-item first">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
						</li>
						<li class="page-item prev">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="javascript:void(0);">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">5</a>
						</li>
						<li class="page-item next">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
						</li>
						<li class="page-item last">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-6">
				<nav aria-label="Page navigation">
					<ul class="pagination pagination-success">
						<li class="page-item first">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
						</li>
						<li class="page-item prev">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="javascript:void(0);">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">5</a>
						</li>
						<li class="page-item next">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
						</li>
						<li class="page-item last">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-6">
				<nav aria-label="Page navigation">
					<ul class="pagination pagination-danger">
						<li class="page-item first">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
						</li>
						<li class="page-item prev">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="javascript:void(0);">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">5</a>
						</li>
						<li class="page-item next">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
						</li>
						<li class="page-item last">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-6">
				<nav aria-label="Page navigation">
					<ul class="pagination pagination-warning">
						<li class="page-item first">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
						</li>
						<li class="page-item prev">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="javascript:void(0);">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">5</a>
						</li>
						<li class="page-item next">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
						</li>
						<li class="page-item last">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-6">
				<nav aria-label="Page navigation">
					<ul class="pagination pagination-info">
						<li class="page-item first">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
						</li>
						<li class="page-item prev">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="javascript:void(0);">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="javascript:void(0);">5</a>
						</li>
						<li class="page-item next">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
						</li>
						<li class="page-item last">
							<a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<h5 class="card-header">Breadcrumbs</h5>
	<div class="card-body">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Library</a>
				</li>
				<li class="breadcrumb-item active">Data</li>
			</ol>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb breadcrumb-style1">
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Library</a>
				</li>
				<li class="breadcrumb-item active">Data</li>
			</ol>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb breadcrumb-style2 mb-0">
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Library</a>
				</li>
				<li class="breadcrumb-item active">Data</li>
			</ol>
		</nav>
	</div>
</div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
<?= $this->endSection() ?>

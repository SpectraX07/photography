<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Spinners</h4>
<div class="card mb-4">
	<h5 class="card-header">Style</h5>
	<div class="row row-bordered g-0">
		<div class="col-md p-4">
			<div class="text-light small fw-semibold">Border</div>
			<div class="demo-inline-spacing">
				<div class="spinner-border" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-primary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-secondary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-success" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-danger" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-warning" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-info" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-light" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-dark" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>
		</div>
		<div class="col-md p-4">
			<div class="text-light small fw-semibold">Growing</div>
			<div class="demo-inline-spacing">
				<div class="spinner-grow" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-primary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-secondary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-success" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-danger" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-warning" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-info" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-light" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-grow text-dark" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mb-4">
	<h5 class="card-header">Size</h5>
	<div class="row row-bordered g-0">
		<div class="col-md p-4">
			<div class="text-light small fw-semibold">Large</div>
			<div class="demo-inline-spacing">
				<div class="spinner-border spinner-border-lg text-primary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border spinner-border-lg text-secondary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>
		</div>
		<div class="col-md p-4">
			<div class="text-light small fw-semibold">Medium</div>
			<div class="demo-inline-spacing">
				<div class="spinner-border text-primary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border text-secondary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>
		</div>
		<div class="col-md p-4">
			<div class="text-light small fw-semibold">Small</div>
			<div class="demo-inline-spacing">
				<div class="spinner-border spinner-border-sm text-primary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
				<div class="spinner-border spinner-border-sm text-secondary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mb-4">
	<h5 class="card-header">With Buttons</h5>
	<div class="card-body">
		<div class="demo-inline-spacing">
			<button class="btn btn-primary" type="button" disabled="">
				<span class="spinner-border" role="status" aria-hidden="true"></span>
				<span class="visually-hidden">Loading...</span>
			</button>
			<button class="btn btn-primary" type="button" disabled="">
				<span class="spinner-border me-1" role="status" aria-hidden="true"></span>
				Loading...
			</button>
			<button class="btn btn-primary" type="button" disabled="">
				<span class="spinner-grow" role="status" aria-hidden="true"></span>
				<span class="visually-hidden">Loading...</span>
			</button>
			<button class="btn btn-primary" type="button" disabled="">
				<span class="spinner-grow me-1" role="status" aria-hidden="true"></span>
				Loading...
			</button>
		</div>
	</div>
</div>
<div class="card">
	<h5 class="card-header">SpinKit</h5>
	<div class="card-body demo-vertical-spacing-lg demo-only-element px-5">
		<div class="row py-sm-4 gy-3 gy-sm-0">
			<div class="col">
				<div class="sk-plane sk-primary"></div>
			</div>
			<div class="col">
				<div class="sk-chase sk-primary">
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
				</div>
			</div>
			<div class="col">
				<div class="sk-bounce sk-primary">
					<div class="sk-bounce-dot"></div>
					<div class="sk-bounce-dot"></div>
				</div>
			</div>
			<div class="col">
				<div class="sk-wave sk-primary">
					<div class="sk-wave-rect"></div>
					<div class="sk-wave-rect"></div>
					<div class="sk-wave-rect"></div>
					<div class="sk-wave-rect"></div>
					<div class="sk-wave-rect"></div>
				</div>
			</div>
		</div>
		<div class="row py-sm-4 gy-3 gy-sm-0">
			<div class="col">
				<div class="sk-pulse sk-primary"></div>
			</div>
			<div class="col">
				<div class="sk-swing sk-primary">
					<div class="sk-swing-dot"></div>
					<div class="sk-swing-dot"></div>
				</div>
			</div>
			<div class="col">
				<div class="sk-circle sk-primary">
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
					<div class="sk-circle-dot"></div>
				</div>
			</div>
			<div class="col">
				<div class="sk-circle-fade sk-primary">
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
					<div class="sk-circle-fade-dot"></div>
				</div>
			</div>
		</div>
		<div class="row py-sm-4 gy-3 gy-sm-0">
			<div class="col">
				<div class="sk-grid sk-primary">
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
					<div class="sk-grid-cube"></div>
				</div>
			</div>
			<div class="col">
				<div class="sk-fold sk-primary">
					<div class="sk-fold-cube"></div>
					<div class="sk-fold-cube"></div>
					<div class="sk-fold-cube"></div>
					<div class="sk-fold-cube"></div>
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
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/spinkit/spinkit.css">
<?= $this->endSection() ?>

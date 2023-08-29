<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<div class="row invoice-add">
	<div class="col-lg-9 col-12 mb-lg-0 mb-4">
		<div class="card invoice-preview-card">
			<div class="card-body">
				<div class="row m-sm-4 m-0">
					<div class="col-md-7 mb-md-0 mb-4 ps-0">
						<div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
							<svg width="32" height="22" viewbox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0"></path>
								<path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616"></path>
								<path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616"></path>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0"></path>
							</svg>
							<span class="app-brand-text fw-bold fs-4">
								Vuexy
							</span>
						</div>
						<p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
						<p class="mb-2">San Diego County, CA 91905, USA</p>
						<p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p>
					</div>
					<div class="col-md-5">
						<dl class="row mb-2">
							<dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
								<span class="h4 text-capitalize mb-0 text-nowrap">Invoice</span>
							</dt>
							<dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
								<div class="input-group input-group-merge disabled w-px-150">
									<span class="input-group-text">#</span>
									<input type="text" class="form-control" disabled="" placeholder="3905" value="3905" id="invoiceId">
								</div>
							</dd>
							<dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
								<span class="fw-normal">Date:</span>
							</dt>
							<dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
								<input type="text" class="form-control w-px-150 date-picker" placeholder="YYYY-MM-DD">
							</dd>
							<dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
								<span class="fw-normal">Due Date:</span>
							</dt>
							<dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
								<input type="text" class="form-control w-px-150 date-picker" placeholder="YYYY-MM-DD">
							</dd>
						</dl>
					</div>
				</div>
				<hr class="my-3 mx-n4">
				<div class="row p-sm-4 p-0">
					<div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-4">
						<h6 class="mb-4">Invoice To:</h6>
						<p class="mb-1">Thomas shelby</p>
						<p class="mb-1">Shelby Company Limited</p>
						<p class="mb-1">Small Heath, B10 0HF, UK</p>
						<p class="mb-1">718-986-6062</p>
						<p class="mb-0">peakyFBlinders@gmail.com</p>
					</div>
					<div class="col-md-6 col-sm-7">
						<h6 class="mb-4">Bill To:</h6>
						<table>
							<tbody>
								<tr>
									<td class="pe-4">Total Due:</td>
									<td><strong>$12,110.55</strong></td>
								</tr>
								<tr>
									<td class="pe-4">Bank name:</td>
									<td>American Bank</td>
								</tr>
								<tr>
									<td class="pe-4">Country:</td>
									<td>United States</td>
								</tr>
								<tr>
									<td class="pe-4">IBAN:</td>
									<td>ETD95476213874685</td>
								</tr>
								<tr>
									<td class="pe-4">SWIFT code:</td>
									<td>BR91905</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<hr class="my-3 mx-n4">
				<form class="source-item pt-4 px-0 px-sm-4">
					<div class="mb-3" data-repeater-list="group-a">
						<div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="">
							<div class="d-flex border rounded position-relative pe-0">
								<div class="row w-100 p-3">
									<div class="col-md-6 col-12 mb-md-0 mb-3">
										<p class="mb-2 repeater-title">Item</p>
										<select class="form-select item-details mb-3">
											<option selected="" disabled="">Select Item</option>
											<option value="App Design">App Design</option>
											<option value="App Customization">App Customization</option>
											<option value="ABC Template">ABC Template</option>
											<option value="App Development">App Development</option>
										</select>
										<textarea class="form-control" rows="2" placeholder="Item Information"></textarea>
									</div>
									<div class="col-md-3 col-12 mb-md-0 mb-3">
										<p class="mb-2 repeater-title">Cost</p>
										<input type="number" class="form-control invoice-item-price mb-3" placeholder="00" min="12">
										<div>
											<span>Discount:</span>
											<span class="discount me-2">0%</span>
											<span class="tax-1 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
											<span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
										</div>
									</div>
									<div class="col-md-2 col-12 mb-md-0 mb-3">
										<p class="mb-2 repeater-title">Qty</p>
										<input type="number" class="form-control invoice-item-qty" placeholder="1" min="1" max="50">
									</div>
									<div class="col-md-1 col-12 pe-0">
										<p class="mb-2 repeater-title">Price</p>
										<p class="mb-0">$24.00</p>
									</div>
								</div>
								<div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
									<i class="ti ti-x cursor-pointer" data-repeater-delete=""></i>
									<div class="dropdown">
										<i class="ti ti-settings ti-xs cursor-pointer more-options-dropdown" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
										</i>
										<div class="dropdown-menu dropdown-menu-end w-px-300 p-3" aria-labelledby="dropdownMenuButton">
											<div class="row g-3">
												<div class="col-12">
													<label for="discountInput" class="form-label">Discount(%)</label>
													<input type="number" class="form-control" id="discountInput" min="0" max="100">
												</div>
												<div class="col-md-6">
													<label for="taxInput1" class="form-label">Tax 1</label>
													<select name="tax-1-input" id="taxInput1" class="form-select tax-select">
														<option value="0%" selected="">0%</option>
														<option value="1%">1%</option>
														<option value="10%">10%</option>
														<option value="18%">18%</option>
														<option value="40%">40%</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="taxInput2" class="form-label">Tax 2</label>
													<select name="tax-2-input" id="taxInput2" class="form-select tax-select">
														<option value="0%" selected="">0%</option>
														<option value="1%">1%</option>
														<option value="10%">10%</option>
														<option value="18%">18%</option>
														<option value="40%">40%</option>
													</select>
												</div>
											</div>
											<div class="dropdown-divider my-3"></div>
											<button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row pb-4">
						<div class="col-12">
							<button type="button" class="btn btn-primary" data-repeater-create="">Add Item</button>
						</div>
					</div>
				</form>
				<hr class="my-3 mx-n4">
				<div class="row p-0 p-sm-4">
					<div class="col-md-6 mb-md-0 mb-3">
						<div class="d-flex align-items-center mb-3">
							<label for="salesperson" class="form-label me-4 fw-semibold">Salesperson:</label>
							<input type="text" class="form-control ms-3" id="salesperson" placeholder="Edward Crowley">
						</div>
						<input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business">
					</div>
					<div class="col-md-6 d-flex justify-content-end">
						<div class="invoice-calculations">
							<div class="d-flex justify-content-between mb-2">
								<span class="w-px-100">Subtotal:</span>
								<span class="fw-semibold">$00.00</span>
							</div>
							<div class="d-flex justify-content-between mb-2">
								<span class="w-px-100">Discount:</span>
								<span class="fw-semibold">$00.00</span>
							</div>
							<div class="d-flex justify-content-between mb-2">
								<span class="w-px-100">Tax:</span>
								<span class="fw-semibold">$00.00</span>
							</div>
							<hr>
							<div class="d-flex justify-content-between">
								<span class="w-px-100">Total:</span>
								<span class="fw-semibold">$00.00</span>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-3 mx-n4">
				<div class="row px-0 px-sm-4">
					<div class="col-12">
						<div class="mb-3">
							<label for="note" class="form-label fw-semibold">Note:</label>
							<textarea class="form-control" rows="2" id="note" placeholder="Invoice note"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-12 invoice-actions">
		<div class="card mb-4">
			<div class="card-body">
				<button class="btn btn-primary d-grid w-100 mb-2" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
					<span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-1"></i>Send Invoice</span>
				</button>
				<a href="app-invoice-preview.html" class="btn btn-label-secondary d-grid w-100 mb-2">Preview</a>
				<button type="button" class="btn btn-label-secondary d-grid w-100">Save</button>
			</div>
		</div>
		<div>
			<p class="mb-2">Accept payments via</p>
			<select class="form-select mb-4">
				<option value="Bank Account">Bank Account</option>
				<option value="Paypal">Paypal</option>
				<option value="Card">Credit/Debit Card</option>
				<option value="UPI Transfer">UPI Transfer</option>
			</select>
			<div class="d-flex justify-content-between mb-2">
				<label for="payment-terms" class="mb-0">Payment Terms</label>
				<label class="switch switch-primary me-0">
					<input type="checkbox" class="switch-input" id="payment-terms" checked="">
					<span class="switch-toggle-slider">
						<span class="switch-on"></span>
						<span class="switch-off"></span>
					</span>
					<span class="switch-label"></span>
				</label>
			</div>
			<div class="d-flex justify-content-between mb-2">
				<label for="client-notes" class="mb-0">Client Notes</label>
				<label class="switch switch-primary me-0">
					<input type="checkbox" class="switch-input" id="client-notes">
					<span class="switch-toggle-slider">
						<span class="switch-on"></span>
						<span class="switch-off"></span>
					</span>
					<span class="switch-label"></span>
				</label>
			</div>
			<div class="d-flex justify-content-between">
				<label for="payment-stub" class="mb-0">Payment Stub</label>
				<label class="switch switch-primary me-0">
					<input type="checkbox" class="switch-input" id="payment-stub">
					<span class="switch-toggle-slider">
						<span class="switch-on"></span>
						<span class="switch-off"></span>
					</span>
					<span class="switch-label"></span>
				</label>
			</div>
		</div>
	</div>
</div>
<div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
	<div class="offcanvas-header my-1">
		<h5 class="offcanvas-title">Send Invoice</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body pt-0 flex-grow-1">
		<form>
			<div class="mb-3">
				<label for="invoice-from" class="form-label">From</label>
				<input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
			</div>
			<div class="mb-3">
				<label for="invoice-to" class="form-label">To</label>
				<input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
			</div>
			<div class="mb-3">
				<label for="invoice-subject" class="form-label">Subject</label>
				<input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
			</div>
			<div class="mb-3">
				<label for="invoice-message" class="form-label">Message</label>
				<textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
					Thank you for your business, always a pleasure to work with you!
					We have generated a new invoice in the amount of $95.59
				We would appreciate payment of this invoice by 05/11/2021</textarea>
			</div>
			<div class="mb-4">
				<span class="badge bg-label-primary">
					<i class="ti ti-link ti-xs"></i>
					<span class="align-middle">Invoice Attached</span>
				</span>
			</div>
			<div class="mb-3 d-flex flex-wrap">
				<button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
				<button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
			</div>
		</form>
	</div>
</div>

<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/flatpickr/flatpickr.css">
<?= $this->endSection() ?>
<?= $this->section('pageCss') ?>
	<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/css/pages/app-invoice.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave-phone.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
	<script src="<?= ADMIN_ASSETS ?>assets/js/offcanvas-send-invoice.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/app-invoice-add.js"></script>
<?= $this->endSection() ?>

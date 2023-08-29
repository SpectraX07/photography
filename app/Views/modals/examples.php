<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">Modal Examples</h4>
<div class="row mb-4">
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-currency-dollar ti-lg"></i>
				<h5>Pricing</h5>
				<p> Elegant pricing options modal popup example, easy to use in any page.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-credit-card ti-lg"></i>
				<h5>Add New Credit Card</h5>
				<p> Quickly collect the credit card details, built in input mask and form validation support.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-home ti-lg"></i>
				<h5>Add New Address</h5>
				<p> Ready to use form to collect user address data with validation and custom input support.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-gift ti-lg"></i>
				<h5>Refer & Earn</h5>
				<p>Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-user ti-lg"></i>
				<h5>Edit User</h5>
				<p>Easily update the user data on the go, built in form validation and custom controls.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-device-mobile ti-lg"></i>
				<h5>Enable OTP</h5>
				<p>Use this modal to enhance your application security by enabling authentication with OTP.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-file-text ti-lg"></i>
				<h5>Share Project</h5>
				<p>Elegant Share Project options modal popup example, easy to use in any page</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4 mb-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-box ti-lg"></i>
				<h5>Create App</h5>
				<p>Provide application data with this form to create your app, easy to use in page.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp"> Show </button>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-lg-4">
		<div class="card">
			<div class="card-body text-center">
				<i class="mb-3 ti ti-lock ti-lg"></i>
				<h5>Two Factor Auth</h5>
				<p>Enhance your application security by enabling two factor authentication.</p>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"> Show </button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="mb-2">Add New Card</h3>
					<p class="text-muted">Add new card to complete payment</p>
				</div>
				<form id="addNewCCForm" class="row g-3" onsubmit="return false">
					<div class="col-12">
						<label class="form-label w-100" for="modalAddCard">Card Number</label>
						<div class="input-group input-group-merge">
							<input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2">
							<span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddCardName">Name</label>
						<input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe">
					</div>
					<div class="col-6 col-md-3">
						<label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
						<input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY">
					</div>
					<div class="col-6 col-md-3">
						<label class="form-label" for="modalAddCardCvv">CVV Code</label>
						<div class="input-group input-group-merge">
							<input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654">
							<span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="text-muted ti ti-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
						</div>
					</div>
					<div class="col-12">
						<label class="switch">
							<input type="checkbox" class="switch-input">
							<span class="switch-toggle-slider">
								<span class="switch-on"></span>
								<span class="switch-off"></span>
							</span>
							<span class="switch-label">Save card for future billing?</span>
						</label>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
						<button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-simple modal-add-new-address">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="address-title mb-2">Add New Address</h3>
					<p class="text-muted address-subtitle">Add new address for express delivery</p>
				</div>
				<form id="addNewAddressForm" class="row g-3" onsubmit="return false">
					<div class="col-12">
						<div class="row">
							<div class="col-md mb-md-0 mb-3">
								<div class="form-check custom-option custom-option-icon">
									<label class="form-check-label custom-option-content" for="customRadioHome">
										<span class="custom-option-body">
											<svg width="41" height="40" viewbox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M24.25 33.75V23.75H16.75V33.75H6.75002V18.0469C6.7491 17.8733 6.78481 17.7015 6.85482 17.5426C6.92482 17.3838 7.02754 17.2415 7.15627 17.125L19.6563 5.76562C19.8841 5.5559 20.1825 5.43948 20.4922 5.43948C20.8019 5.43948 21.1003 5.5559 21.3281 5.76562L33.8438 17.125C33.9696 17.2438 34.0703 17.3866 34.1401 17.5449C34.2098 17.7032 34.2472 17.8739 34.25 18.0469V33.75H24.25Z" fill="currentColor" opacity="0.2"></path>
												<path d="M33.25 33.75C33.25 34.3023 33.6977 34.75 34.25 34.75C34.8023 34.75 35.25 34.3023 35.25 33.75H33.25ZM34.25 18.0469H35.25C35.25 18.0415 35.25 18.0361 35.2499 18.0307L34.25 18.0469ZM33.8437 17.125L34.5304 16.398C34.5256 16.3934 34.5207 16.389 34.5158 16.3845L33.8437 17.125ZM21.3281 5.76562L20.6509 6.50143L20.656 6.50611L21.3281 5.76562ZM19.6562 5.76562L20.3288 6.5057L20.3335 6.50141L19.6562 5.76562ZM7.15625 17.125L7.82712 17.8666L7.82878 17.8651L7.15625 17.125ZM6.75 18.0469H7.75001L7.74999 18.0416L6.75 18.0469ZM5.75 33.75C5.75 34.3023 6.19772 34.75 6.75 34.75C7.30228 34.75 7.75 34.3023 7.75 33.75H5.75ZM3 32.75C2.44772 32.75 2 33.1977 2 33.75C2 34.3023 2.44772 34.75 3 34.75V32.75ZM38 34.75C38.5523 34.75 39 34.3023 39 33.75C39 33.1977 38.5523 32.75 38 32.75V34.75ZM23.25 33.75C23.25 34.3023 23.6977 34.75 24.25 34.75C24.8023 34.75 25.25 34.3023 25.25 33.75H23.25ZM15.75 33.75C15.75 34.3023 16.1977 34.75 16.75 34.75C17.3023 34.75 17.75 34.3023 17.75 33.75H15.75ZM35.25 33.75V18.0469H33.25V33.75H35.25ZM35.2499 18.0307C35.2449 17.7243 35.1787 17.422 35.0551 17.1416L33.225 17.9481C33.2409 17.9844 33.2495 18.0235 33.2501 18.0631L35.2499 18.0307ZM35.0551 17.1416C34.9316 16.8612 34.7531 16.6084 34.5304 16.398L33.1571 17.852C33.1859 17.8792 33.209 17.9119 33.225 17.9481L35.0551 17.1416ZM34.5158 16.3845L22.0002 5.02514L20.656 6.50611L33.1717 17.8655L34.5158 16.3845ZM22.0053 5.02984C21.5929 4.6502 21.0528 4.43948 20.4922 4.43948V6.43948C20.551 6.43948 20.6076 6.46159 20.6509 6.50141L22.0053 5.02984ZM20.4922 4.43948C19.9316 4.43948 19.3915 4.6502 18.979 5.02984L20.3335 6.50141C20.3767 6.46159 20.4334 6.43948 20.4922 6.43948V4.43948ZM18.9837 5.02556L6.48371 16.3849L7.82878 17.8651L20.3288 6.50569L18.9837 5.02556ZM6.48538 16.3834C6.25236 16.5942 6.06642 16.8518 5.93971 17.1393L7.76988 17.9459C7.78318 17.9157 7.80268 17.8887 7.82712 17.8666L6.48538 16.3834ZM5.93971 17.1393C5.813 17.4269 5.74836 17.7379 5.75001 18.0521L7.74999 18.0416C7.74981 18.0087 7.75659 17.976 7.76988 17.9459L5.93971 17.1393ZM5.75 18.0469V33.75H7.75V18.0469H5.75ZM3 34.75H38V32.75H3V34.75ZM25.25 33.75V25H23.25V33.75H25.25ZM25.25 25C25.25 24.4033 25.013 23.831 24.591 23.409L23.1768 24.8232C23.2237 24.8701 23.25 24.9337 23.25 25H25.25ZM24.591 23.409C24.169 22.987 23.5967 22.75 23 22.75V24.75C23.0663 24.75 23.1299 24.7763 23.1768 24.8232L24.591 23.409ZM23 22.75H18V24.75H23V22.75ZM18 22.75C17.4033 22.75 16.831 22.9871 16.409 23.409L17.8232 24.8232C17.8701 24.7763 17.9337 24.75 18 24.75V22.75ZM16.409 23.409C15.9871 23.831 15.75 24.4033 15.75 25H17.75C17.75 24.9337 17.7763 24.8701 17.8232 24.8232L16.409 23.409ZM15.75 25V33.75H17.75V25H15.75Z" fill="currentColor"></path>
											</svg>
											<span class="custom-option-title">Home</span>
											<small> Delivery time (9am – 9pm) </small>
										</span>
										<input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked="">
									</label>
								</div>
							</div>
							<div class="col-md mb-md-0 mb-3">
								<div class="form-check custom-option custom-option-icon">
									<label class="form-check-label custom-option-content" for="customRadioOffice">
										<span class="custom-option-body">
											<svg width="41" height="40" viewbox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M22.75 33.75V6.25C22.75 5.91848 22.6183 5.60054 22.3839 5.36612C22.1495 5.1317 21.8315 5 21.5 5H6.5C6.16848 5 5.85054 5.1317 5.61612 5.36612C5.3817 5.60054 5.25 5.91848 5.25 6.25V33.75" fill="currentColor" fill-opacity="0.2"></path>
												<path d="M2.75 32.75C2.19772 32.75 1.75 33.1977 1.75 33.75C1.75 34.3023 2.19772 34.75 2.75 34.75V32.75ZM37.75 34.75C38.3023 34.75 38.75 34.3023 38.75 33.75C38.75 33.1977 38.3023 32.75 37.75 32.75V34.75ZM21.75 33.75C21.75 34.3023 22.1977 34.75 22.75 34.75C23.3023 34.75 23.75 34.3023 23.75 33.75H21.75ZM21.5 5V4V5ZM5.25 6.25H4.25H5.25ZM4.25 33.75C4.25 34.3023 4.69772 34.75 5.25 34.75C5.80228 34.75 6.25 34.3023 6.25 33.75H4.25ZM34.25 33.75C34.25 34.3023 34.6977 34.75 35.25 34.75C35.8023 34.75 36.25 34.3023 36.25 33.75H34.25ZM22.75 14C22.1977 14 21.75 14.4477 21.75 15C21.75 15.5523 22.1977 16 22.75 16V14ZM10.25 10.25C9.69772 10.25 9.25 10.6977 9.25 11.25C9.25 11.8023 9.69772 12.25 10.25 12.25V10.25ZM15.25 12.25C15.8023 12.25 16.25 11.8023 16.25 11.25C16.25 10.6977 15.8023 10.25 15.25 10.25V12.25ZM12.75 20.25C12.1977 20.25 11.75 20.6977 11.75 21.25C11.75 21.8023 12.1977 22.25 12.75 22.25V20.25ZM17.75 22.25C18.3023 22.25 18.75 21.8023 18.75 21.25C18.75 20.6977 18.3023 20.25 17.75 20.25V22.25ZM10.25 26.5C9.69772 26.5 9.25 26.9477 9.25 27.5C9.25 28.0523 9.69772 28.5 10.25 28.5V26.5ZM15.25 28.5C15.8023 28.5 16.25 28.0523 16.25 27.5C16.25 26.9477 15.8023 26.5 15.25 26.5V28.5ZM27.75 26.5C27.1977 26.5 26.75 26.9477 26.75 27.5C26.75 28.0523 27.1977 28.5 27.75 28.5V26.5ZM30.25 28.5C30.8023 28.5 31.25 28.0523 31.25 27.5C31.25 26.9477 30.8023 26.5 30.25 26.5V28.5ZM27.75 20.25C27.1977 20.25 26.75 20.6977 26.75 21.25C26.75 21.8023 27.1977 22.25 27.75 22.25V20.25ZM30.25 22.25C30.8023 22.25 31.25 21.8023 31.25 21.25C31.25 20.6977 30.8023 20.25 30.25 20.25V22.25ZM2.75 34.75H37.75V32.75H2.75V34.75ZM23.75 33.75V6.25H21.75V33.75H23.75ZM23.75 6.25C23.75 5.65326 23.5129 5.08097 23.091 4.65901L21.6768 6.07322C21.7237 6.12011 21.75 6.18369 21.75 6.25H23.75ZM23.091 4.65901C22.669 4.23705 22.0967 4 21.5 4V6C21.5663 6 21.6299 6.02634 21.6768 6.07322L23.091 4.65901ZM21.5 4H6.5V6H21.5V4ZM6.5 4C5.90326 4 5.33097 4.23705 4.90901 4.65901L6.32322 6.07322C6.37011 6.02634 6.4337 6 6.5 6V4ZM4.90901 4.65901C4.48705 5.08097 4.25 5.65326 4.25 6.25H6.25C6.25 6.1837 6.27634 6.12011 6.32322 6.07322L4.90901 4.65901ZM4.25 6.25V33.75H6.25V6.25H4.25ZM36.25 33.75V16.25H34.25V33.75H36.25ZM36.25 16.25C36.25 15.6533 36.013 15.081 35.591 14.659L34.1768 16.0732C34.2237 16.1201 34.25 16.1837 34.25 16.25H36.25ZM35.591 14.659C35.169 14.2371 34.5967 14 34 14V16C34.0663 16 34.1299 16.0263 34.1768 16.0732L35.591 14.659ZM34 14H22.75V16H34V14ZM10.25 12.25H15.25V10.25H10.25V12.25ZM12.75 22.25H17.75V20.25H12.75V22.25ZM10.25 28.5H15.25V26.5H10.25V28.5ZM27.75 28.5H30.25V26.5H27.75V28.5ZM27.75 22.25H30.25V20.25H27.75V22.25Z" fill="currentColor"></path>
											</svg>
											<span class="custom-option-title"> Office </span>
											<small> Delivery time (9am – 5pm) </small>
										</span>
										<input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice">
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddressFirstName">First Name</label>
						<input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddressLastName">Last Name</label>
						<input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe">
					</div>
					<div class="col-12">
						<label class="form-label" for="modalAddressCountry">Country</label>
						<select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
							<option value="">Select</option>
							<option value="Australia">Australia</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Belarus">Belarus</option>
							<option value="Brazil">Brazil</option>
							<option value="Canada">Canada</option>
							<option value="China">China</option>
							<option value="France">France</option>
							<option value="Germany">Germany</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Japan">Japan</option>
							<option value="Korea">Korea, Republic of</option>
							<option value="Mexico">Mexico</option>
							<option value="Philippines">Philippines</option>
							<option value="Russia">Russian Federation</option>
							<option value="South Africa">South Africa</option>
							<option value="Thailand">Thailand</option>
							<option value="Turkey">Turkey</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
						</select>
					</div>
					<div class="col-12 ">
						<label class="form-label" for="modalAddressAddress1">Address Line 1</label>
						<input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park">
					</div>
					<div class="col-12">
						<label class="form-label" for="modalAddressAddress2">Address Line 2</label>
						<input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddressLandmark">Landmark</label>
						<input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddressCity">City</label>
						<input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddressLandmark">State</label>
						<input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalAddressZipCode">Zip Code</label>
						<input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950">
					</div>
					<div class="col-12">
						<label class="switch">
							<input type="checkbox" class="switch-input">
							<span class="switch-toggle-slider">
								<span class="switch-on"></span>
								<span class="switch-off"></span>
							</span>
							<span class="switch-label">Use as a billing address?</span>
						</label>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
						<button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="mb-2">Refer & Earn</h3>
					<p class="text-muted text-center mb-5 w-75 m-auto">Invite your friend to Vuexy, if they sign up, you and your friend will get 30 days free trial.</p>
				</div>
				<div class="row">
					<div class="col-12 col-lg-4 px-4">
						<div class="d-flex justify-content-center mb-4">
							<div class="modal-refer-and-earn-step bg-label-primary">
								<i class="ti ti-mail"></i>
							</div>
						</div>
						<div class="text-center">
							<h5>Send Invitation 🤟🏻</h5>
							<p class="mb-lg-0">Send your referral link to your friend</p>
						</div>
					</div>
					<div class="col-12 col-lg-4 px-4">
						<div class="d-flex justify-content-center mb-4">
							<div class="modal-refer-and-earn-step bg-label-primary">
								<i class="ti ti-list"></i>
							</div>
						</div>
						<div class="text-center">
							<h5>Registration 👩🏻‍💻</h5>
							<p class="mb-lg-0">Let them register to our services</p>
						</div>
					</div>
					<div class="col-12 col-lg-4 px-4">
						<div class="d-flex justify-content-center mb-4">
							<div class="modal-refer-and-earn-step bg-label-primary">
								<i class="ti ti-gift"></i>
							</div>
						</div>
						<div class="text-center">
							<h5>Free Trial 🎉</h5>
							<p class="mb-0">Your friend will get 30 days free trial</p>
						</div>
					</div>
				</div>
				<hr class="my-5">
				<h5>Invite your friends</h5>
				<form class="row g-3" onsubmit="return false">
					<div class="col-lg-10">
						<label class="form-label" for="modalRnFEmail">Enter your friend’s email address and invite them to join Vuexy 😍</label>
						<input type="text" id="modalRnFEmail" class="form-control" placeholder="example@domain.com" aria-label="example@domain.com">
					</div>
					<div class="col-lg-2 d-flex align-items-end">
						<button type="button" class="btn btn-primary">Send</button>
					</div>
				</form>
				<h5 class="mt-4">Share the referral link</h5>
				<form class="row g-3" onsubmit="return false">
					<div class="col-lg-9">
						<label class="form-label" for="modalRnFLink">You can also copy and send it or share it on your social media. 🥳</label>
						<div class="input-group input-group-merge">
							<input type="text" id="modalRnFLink" class="form-control" value="https://pixinvent.com">
							<span class="input-group-text text-primary cursor-pointer" id="basic-addon33">Copy link</span>
						</div>
					</div>
					<div class="col-lg-3 d-flex align-items-end">
						<div class="btn-social">
							<button type="button" class="btn btn-icon btn-facebook mr-2"><i class="ti ti-brand-facebook"></i></button>
							<button type="button" class="btn btn-icon btn-twitter mr-2"><i class="ti ti-brand-twitter"></i></button>
							<button type="button" class="btn btn-icon btn-linkedin"><i class="ti ti-brand-linkedin"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-simple modal-edit-user">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="mb-2">Edit User Information</h3>
					<p class="text-muted">Updating user details will receive a privacy audit.</p>
				</div>
				<form id="editUserForm" class="row g-3" onsubmit="return false">
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserFirstName">First Name</label>
						<input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserLastName">Last Name</label>
						<input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe">
					</div>
					<div class="col-12">
						<label class="form-label" for="modalEditUserName">Username</label>
						<input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserEmail">Email</label>
						<input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserStatus">Status</label>
						<select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
							<option selected="">Status</option>
							<option value="1">Active</option>
							<option value="2">Inactive</option>
							<option value="3">Suspended</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditTaxID">Tax ID</label>
						<input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserPhone">Phone Number</label>
						<div class="input-group">
							<span class="input-group-text">US (+1)</span>
							<input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserLanguage">Language</label>
						<select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple="">
							<option value="">Select</option>
							<option value="english" selected="">English</option>
							<option value="spanish">Spanish</option>
							<option value="french">French</option>
							<option value="german">German</option>
							<option value="dutch">Dutch</option>
							<option value="hebrew">Hebrew</option>
							<option value="sanskrit">Sanskrit</option>
							<option value="hindi">Hindi</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label" for="modalEditUserCountry">Country</label>
						<select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
							<option value="">Select</option>
							<option value="Australia">Australia</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Belarus">Belarus</option>
							<option value="Brazil">Brazil</option>
							<option value="Canada">Canada</option>
							<option value="China">China</option>
							<option value="France">France</option>
							<option value="Germany">Germany</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Japan">Japan</option>
							<option value="Korea">Korea, Republic of</option>
							<option value="Mexico">Mexico</option>
							<option value="Philippines">Philippines</option>
							<option value="Russia">Russian Federation</option>
							<option value="South Africa">South Africa</option>
							<option value="Thailand">Thailand</option>
							<option value="Turkey">Turkey</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
						</select>
					</div>
					<div class="col-12">
						<label class="switch">
							<input type="checkbox" class="switch-input">
							<span class="switch-toggle-slider">
								<span class="switch-on"></span>
								<span class="switch-off"></span>
							</span>
							<span class="switch-label">Use as a billing address?</span>
						</label>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
						<button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="mb-2">Enable One Time Password</h3>
					<p>Verify Your Mobile Number for SMS</p>
				</div>
				<p>Enter your mobile phone number with country code and we will send you a verification code.</p>
				<form id="enableOTPForm" class="row g-3" onsubmit="return false">
					<div class="col-12">
						<label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
						<div class="input-group">
							<span class="input-group-text">US (+1)</span>
							<input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone" class="form-control phone-number-otp-mask" placeholder="202 555 0111">
						</div>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
						<button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="shareProject" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center">
					<h3 class="mb-2">Share Project</h3>
					<p>Share project with a team member</p>
				</div>
			</div>
			<div class="mb-4 pb-2">
				<label for="select2Basic" class="form-label">Add Members</label>
				<select id="select2Basic" class="form-select form-select-lg share-project-select" data-allow-clear="true">
					<option data-name="Adelaide Nichols" data-image="img/avatars/13.png" selected="">Adelaide Nichols</option>
					<option data-name="Julian Murphy" data-image="img/avatars/9.png">Julian Murphy</option>
					<option data-name="Sophie Gilbert" data-image="img/avatars/10.png">Sophie Gilbert</option>
					<option data-name="Marvin Wheeler" data-image="img/avatars/7.png">Marvin Wheeler</option>
				</select>
			</div>
			<h4 class="mb-4 pb-2">8 Members</h4>
			<ul class="p-0 m-0">
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Lester Palmer</p>
							<p class="mb-0 text-muted">pe@vogeiz.net</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Edit</span></button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Mattie Blair</p>
							<p class="mb-0 text-muted">peromak@zukedohik.gov</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Owner</span></button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Marvin Wheeler</p>
							<p class="mb-0 text-muted">rumet@jujpejah.net</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Edit</span></button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Nannie Ford</p>
							<p class="mb-0 text-muted">negza@nuv.io</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Comment</span> </button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Julian Murphy</p>
							<p class="mb-0 text-muted">lunebame@umdomgu.net</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can View</span></button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/6.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Sophie Gilbert</p>
							<p class="mb-0 text-muted">ha@sugit.gov</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can View</span> </button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap mb-3">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/7.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Chris Watkins</p>
							<p class="mb-0 text-muted">zokap@mak.org</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Comment</span> </button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="d-flex flex-wrap">
					<div class="avatar me-3">
						<img src="<?= ADMIN_ASSETS ?>assets/img/avatars/8.png" alt="avatar" class="rounded-circle">
					</div>
					<div class="d-flex justify-content-between flex-grow-1">
						<div class="me-2">
							<p class="mb-0">Adelaide Nichols</p>
							<p class="mb-0 text-muted">ujinomu@jigo.com</p>
						</div>
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Edit</span> </button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Owner</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0);">Can View</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
			<div class="d-flex align-items-start mt-4 align-items-sm-center">
				<i class="ti ti-users me-2"></i>
				<div class="d-flex justify-content-between flex-grow-1 align-items-center flex-wrap gap-2">
					<h6 class="mb-0">Public to Vuexy - Pixinvent</h6>
					<button class="btn btn-primary">Copy Project Link</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body p-2">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center">
					<h3 class="mb-2">Create App</h3>
					<p>Provide data with this form to create your app.</p>
				</div>
				<div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
					<div class="bs-stepper-header border-0 p-1">
						<div class="step" data-target="#details">
							<button type="button" class="step-trigger">
								<span class="bs-stepper-circle"><i class="ti ti-file-text ti-sm"></i></span>
								<span class="bs-stepper-label">
									<span class="bs-stepper-title text-uppercase">Details</span>
									<span class="bs-stepper-subtitle">Enter Details</span>
								</span>
							</button>
						</div>
						<div class="line"></div>
						<div class="step" data-target="#frameworks">
							<button type="button" class="step-trigger">
								<span class="bs-stepper-circle"><i class="ti ti-box ti-sm"></i></span>
								<span class="bs-stepper-label">
									<span class="bs-stepper-title text-uppercase">Frameworks</span>
									<span class="bs-stepper-subtitle">Select Framework</span>
								</span>
							</button>
						</div>
						<div class="line"></div>
						<div class="step" data-target="#database">
							<button type="button" class="step-trigger">
								<span class="bs-stepper-circle"><i class="ti ti-database ti-sm"></i></span>
								<span class="bs-stepper-label">
									<span class="bs-stepper-title text-uppercase">Database</span>
									<span class="bs-stepper-subtitle">Select Database</span>
								</span>
							</button>
						</div>
						<div class="line"></div>
						<div class="step" data-target="#billing">
							<button type="button" class="step-trigger">
								<span class="bs-stepper-circle"><i class="ti ti-credit-card ti-sm"></i></span>
								<span class="bs-stepper-label">
									<span class="bs-stepper-title text-uppercase">Billing</span>
									<span class="bs-stepper-subtitle">Payment Details</span>
								</span>
							</button>
						</div>
						<div class="line"></div>
						<div class="step" data-target="#submit">
							<button type="button" class="step-trigger">
								<span class="bs-stepper-circle"><i class="ti ti-check ti-sm"></i></span>
								<span class="bs-stepper-label">
									<span class="bs-stepper-title text-uppercase">Submit</span>
									<span class="bs-stepper-subtitle">Submit</span>
								</span>
							</button>
						</div>
					</div>
					<div class="bs-stepper-content p-1">
						<form onsubmit="return false">
							<div id="details" class="content pt-3 pt-lg-0">
								<div class="mb-3">
									<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Application Name">
								</div>
								<h5>Category</h5>
								<ul class="p-0 m-0">
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-file-text ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">CRM Application</h6>
												<small class="text-muted">Scales with any business</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="details-radio" class="form-check-input" type="radio" value="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-success p-2 me-3 rounded"><i class="ti ti-shopping-cart ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">eCommerce Platforms</h6>
												<small class="text-muted">Grow Your Business With App</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="details-radio" class="form-check-input" type="radio" value="" checked="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start">
										<div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-device-laptop ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">Online Learning platform</h6>
												<small class="text-muted">Start learning today</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="details-radio" class="form-check-input" type="radio" value="">
												</div>
											</div>
										</div>
									</li>
								</ul>
								<div class="col-12 d-flex justify-content-between mt-4">
									<button class="btn btn-label-secondary btn-prev" disabled=""> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
										<span class="align-middle d-sm-inline-block d-none">Previous</span>
									</button>
									<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
								</div>
							</div>
							<div id="frameworks" class="content pt-3 pt-lg-0">
								<h5>Category</h5>
								<ul class="p-0 m-0">
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-brand-react-native ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">React Native</h6>
												<small class="text-muted">Create truly native apps</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="frameworks-radio" class="form-check-input" type="radio" value="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-angular ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">Angular</h6>
												<small class="text-muted">Most suited for your application</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-warning p-2 me-3 rounded"><i class="ti ti-brand-html5 ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">HTML</h6>
												<small class="text-muted">Progressive Framework</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start">
										<div class="badge bg-label-success p-2 me-3 rounded"><i class="ti ti-brand-vue ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">VueJs</h6>
												<small class="text-muted">JS web frameworks</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="frameworks-radio" class="form-check-input" type="radio" value="">
												</div>
											</div>
										</div>
									</li>
								</ul>
								<div class="col-12 d-flex justify-content-between mt-4">
									<button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
									<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
								</div>
							</div>
							<div id="database" class="content pt-3 pt-lg-0">
								<div class="mb-3">
									<input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="Database Name">
								</div>
								<h5>Select Database Engine</h5>
								<ul class="p-0 m-0">
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-firebase ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">Firebase</h6>
												<small class="text-muted">Cloud Firestone</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="database-radio" class="form-check-input" type="radio" value="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start mb-3">
										<div class="badge bg-label-warning p-2 me-3 rounded"><i class="ti ti-brand-amazon ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">AWS</h6>
												<small class="text-muted">Amazon Fast NoSQL Database</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="database-radio" class="form-check-input" type="radio" value="" checked="">
												</div>
											</div>
										</div>
									</li>
									<li class="d-flex align-items-start">
										<div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-database ti-md"></i></div>
										<div class="d-flex justify-content-between w-100">
											<div class="me-2">
												<h6 class="mb-0">MySQL</h6>
												<small class="text-muted">Basic MySQL database</small>
											</div>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-inline">
													<input name="database-radio" class="form-check-input" type="radio" value="">
												</div>
											</div>
										</div>
									</li>
								</ul>
								<div class="col-12 d-flex justify-content-between mt-4">
									<button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
									<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
								</div>
							</div>
							<div id="billing" class="content">
								<div id="AppNewCCForm" class="row g-3 pt-3 pt-lg-0" onsubmit="return false">
									<div class="col-12">
										<div class="input-group input-group-merge">
											<input class="form-control app-credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAppAddCard">
											<span class="input-group-text cursor-pointer p-1" id="modalAppAddCard"><span class="app-card-type"></span></span>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<input type="text" class="form-control" placeholder="John Doe">
									</div>
									<div class="col-6 col-md-3">
										<input type="text" class="form-control app-expiry-date-mask" placeholder="MM/YY">
									</div>
									<div class="col-6 col-md-3">
										<div class="input-group input-group-merge">
											<input type="text" id="modalAppAddCardCvv" class="form-control app-cvv-code-mask" maxlength="3" placeholder="654">
											<span class="input-group-text cursor-pointer" id="modalAppAddCardCvv2"><i class="text-muted ti ti-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
										</div>
									</div>
									<div class="col-12">
										<label class="switch">
											<input type="checkbox" class="switch-input" checked="">
											<span class="switch-toggle-slider">
												<span class="switch-on"></span>
												<span class="switch-off"></span>
											</span>
											<span class="switch-label">Save card for future billing?</span>
										</label>
									</div>
								</div>
								<div class="col-12 d-flex justify-content-between mt-5">
									<button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
									<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
								</div>
							</div>
							<div id="submit" class="content text-center pt-3 pt-lg-0">
								<h5 class="mb-2 mt-3">Submit</h5>
								<p>Submit to kick start your project.</p>
								<img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/girl-with-laptop.png" class="img-fluid" alt="Create App img" width="175">
								<div class="col-12 d-flex justify-content-between mt-4 pt-2">
									<button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
									<button class="btn btn-success btn-next btn-submit" data-bs-dismiss="modal" aria-label="Close"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Submit</span> <i class="ti ti-check ti-xs"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="twoFactorAuth" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-4">
					<h3 class="mb-2">Select Authentication Method</h3>
					<p class="text-muted">You also need to select a method by which the proxy authenticates to the directory serve.</p>
				</div>
				<div class="form-check custom-option custom-option-basic mb-3">
					<label class="form-check-label custom-option-content ps-3" for="customRadioTemp1" data-bs-target="#twoFactorAuthOne" data-bs-toggle="modal">
						<input name="customRadioTemp" class="form-check-input d-none" type="radio" value="" id="customRadioTemp1">
						<div class="d-flex align-items-start">
							<i class="ti ti-settings ti-xl me-3"></i>
							<div>
								<span class="custom-option-header">
									<span class="h4 mb-2">Authenticator Apps</span>
								</span>
								<span class="custom-option-body">
									<p class="mb-0">Get code from an app like Google Authenticator or Microsoft Authenticator.</p>
								</span>
							</div>
						</div>
					</label>
				</div>
				<div class="form-check custom-option custom-option-basic">
					<label class="form-check-label custom-option-content ps-3" for="customRadioTemp2" data-bs-target="#twoFactorAuthTwo" data-bs-toggle="modal">
						<input name="customRadioTemp" class="form-check-input d-none" type="radio" value="" id="customRadioTemp2">
						<div class="d-flex align-items-start">
							<i class="ti ti-message ti-xl me-3"></i>
							<div>
								<span class="custom-option-header">
									<span class="h4 mb-2">SMS</span>
								</span>
								<span class="custom-option-body">
									<p class="mb-0">We will send a code via SMS if you need to use your backup login method.</p>
								</span>
							</div>
						</div>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="twoFactorAuthOne" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="text-center mb-2">
					<h3 class="mb-0">Add Authenticator App</h3>
				</div>
				<h5 class="mb-2 pt-1 text-break">Authenticator Apps</h5>
				<p class="mb-4">Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the QR code. It will generate a 6-digit code for you to enter below.</p>
				<div class="text-center">
					<img src="<?= ADMIN_ASSETS ?>assets/img/icons/misc/authentication-QR.png" alt="QR Code" width="140">
				</div>
				<div class="alert alert-warning alert-dismissible my-3" role="alert">
					<h5 class="alert-heading mb-2 text-truncate">ASDLKNASDA9AHS678dGhASD78AB</h5>
					<p class="mb-0">If you're having trouble using the QR code, select manual entry on your app</p>
				</div>
				<div class="mb-4">
					<input type="email" class="form-control" id="twoFactorAuthInput" placeholder="Enter Authentication Code">
				</div>
				<div class="text-end">
					<button type="button" class="btn btn-label-secondary me-sm-3 me-1" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><i class="ti ti-arrow-left ti-xs me-1 scaleX-n1-rtl"></i><span class="align-middle d-none d-sm-inline-block">Back</span></button>
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle d-none d-sm-inline-block">Continue</span><i class="ti ti-arrow-right ti-xs ms-1 scaleX-n1-rtl"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="twoFactorAuthTwo" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
		<div class="modal-content p-3 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<h5 class="mb-2 pt-1">Verify Your Mobile Number for SMS</h5>
				<p class="mb-4">Enter your mobile phone number with country code, and we will send you a verification code.</p>
				<div class="mb-4">
					<input type="text" class="form-control" id="twoFactorAuthInputSms" placeholder="747 875 3459">
				</div>
				<div class="text-end">
					<button type="button" class="btn btn-label-secondary me-sm-3 me-1" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><i class="ti ti-arrow-left ti-xs me-1 scaleX-n1-rtl"></i><span class="align-middle d-none d-sm-inline-block">Back</span></button>
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle d-none d-sm-inline-block">Continue</span><i class="ti ti-arrow-right ti-xs ms-1 scaleX-n1-rtl"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-simple modal-pricing">
		<div class="modal-content p-2 p-md-5">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="pb-sm-5 pb-2 rounded-top">
					<h2 class="text-center mb-2">Pricing Plans</h2>
					<p class="text-center"> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
					<div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-3 mb-4">
						<label class="switch switch-primary ms-3 ms-sm-0 mt-2">
							<span class="switch-label">Monthly</span>
							<input type="checkbox" class="switch-input price-duration-toggler" checked="">
							<span class="switch-toggle-slider">
								<span class="switch-on"></span>
								<span class="switch-off"></span>
							</span>
							<span class="switch-label">Annual</span>
						</label>
						<div class="mt-n5 ms-n5 d-none d-sm-block">
							<i class="ti ti-corner-left-down ti-sm text-muted me-1 scaleX-n1-rtl"></i>
							<span class="badge badge-sm bg-label-primary">Save up to 10%</span>
						</div>
					</div>
					<div class="row mx-0 gy-3">
						<div class="col-xl mb-md-0 mb-4">
							<div class="card border rounded shadow-none">
								<div class="card-body">
									<div class="my-3 pt-2 text-center">
										<img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/page-pricing-basic.png" alt="Basic Image" height="140">
									</div>
									<h3 class="card-title fw-semibold text-center text-capitalize mb-1">Basic</h3>
									<p class="text-center">A simple start for everyone</p>
									<div class="text-center py-1">
										<div class="d-flex justify-content-center">
											<sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
											<h1 class="fw-semibold display-4 mb-0 text-primary">0</h1>
											<sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/month</sub>
										</div>
									</div>
									<ul class="ps-3 my-3 pt-3">
										<li class="mb-2">100 responses a month</li>
										<li class="mb-2">Unlimited forms and surveys</li>
										<li class="mb-2">Unlimited fields</li>
										<li class="mb-2">Basic form creation tools</li>
										<li class="mb-0">Up to 2 subdomains</li>
									</ul>
									<a href="auth-register-basic.html" class="btn btn-label-success d-grid w-100 mt-3">Your Current Plan</a>
								</div>
							</div>
						</div>
						<div class="col-xl mb-md-0 mb-4">
							<div class="card border-primary border shadow-none">
								<div class="card-body position-relative">
									<div class="position-absolute end-0 me-4 top-0 mt-4">
										<span class="badge bg-label-primary">Popular</span>
									</div>
									<div class="my-3 pt-2 text-center">
										<img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/page-pricing-standard.png" alt="Standard Image" height="140">
									</div>
									<h3 class="card-title fw-semibold text-center text-capitalize mb-1">Pro</h3>
									<p class="text-center">For small to medium businesses</p>
									<div class="text-center">
										<div class="d-flex justify-content-center">
											<sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
											<h1 class="price-toggle price-yearly fw-semibold display-4 text-primary mb-0">7</h1>
											<h1 class="price-toggle price-monthly fw-semibold display-4 text-primary mb-0 d-none">9</h1>
											<sub class="h6 text-muted pricing-duration mt-auto mb-2 fw-normal">/month</sub>
										</div>
										<small class="price-yearly price-yearly-toggle text-muted">$ 90 / year</small>
									</div>
									<ul class="ps-3 my-2 pt-2">
										<li class="mb-2">Up to 5 users</li>
										<li class="mb-2">120+ components</li>
										<li class="mb-2">Basic support on Github</li>
										<li class="mb-2">Monthly updates</li>
										<li class="mb-0">Integrations</li>
									</ul>
									<a href="auth-register-basic.html" class="btn btn-primary d-grid w-100 mt-3">Upgrade</a>
								</div>
							</div>
						</div>
						<div class="col-xl">
							<div class="card border rounded shadow-none">
								<div class="card-body">
									<div class="my-3 pt-2 text-center">
										<img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/page-pricing-enterprise.png" alt="Enterprise Image" height="140">
									</div>
									<h3 class="card-title text-center text-capitalize fw-semibold mb-1">Enterprise</h3>
									<p class="text-center">Solution for big organizations</p>
									<div class="text-center">
										<div class="d-flex justify-content-center">
											<sup class="h6 text-primary pricing-currency mt-3 mb-0 me-1">$</sup>
											<h1 class="price-toggle price-yearly fw-semibold display-4 text-primary mb-0">16</h1>
											<h1 class="price-toggle price-monthly fw-semibold display-4 text-primary mb-0 d-none">19</h1>
											<sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-muted">/month</sub>
										</div>
										<small class="price-yearly price-yearly-toggle text-muted">$ 190 / year</small>
									</div>
									<ul class="ps-3 my-2 pt-2">
										<li class="mb-2">Up to 10 users</li>
										<li class="mb-2">150+ components</li>
										<li class="mb-2">Basic support on Github</li>
										<li class="mb-2">Monthly updates</li>
										<li class="mb-0">Speedy build tooling</li>
									</ul>
									<a href="auth-register-basic.html" class="btn btn-label-primary d-grid w-100 mt-3">Upgrade</a>
								</div>
							</div>
						</div>
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
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/select2/select2.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/bs-stepper/bs-stepper.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave-phone.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/select2/select2.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/select2/select2.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-add-new-cc.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-add-new-address.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-edit-user.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-enable-otp.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-share-project.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-create-app.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/modal-two-factor-auth.js"></script>
	<script src="<?= ADMIN_ASSETS ?>assets/js/pages-pricing.js"></script>
<?= $this->endSection() ?>

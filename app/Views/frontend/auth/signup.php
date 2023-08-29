<div>

    <?= form_open(route_to('signup'), ['id' => 'signupForm', 'class' => 'row g-3']); ?>
    <div class="col-12">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
        <div class="invalid-feedback"></div>
    </div>


    <div class="col-12">
        <label class="form-label">User Name</label>
        <input type="text" name="userName" class="form-control">
        <div class="invalid-feedback"></div>
    </div>

    <div class="col-12">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control">
        <div class="invalid-feedback"></div>
    </div>

    <div class="col-12">
        <label class="form-label">Password</label>
        <input type="text" name="password" class="form-control">
        <div class="invalid-feedback"></div>
    </div>

    <div class="col-12">
        <label class="form-label">Confirm Password</label>
        <input type="text" name="confirmPassword" class="form-control">
        <div class="invalid-feedback"></div>
    </div>


    <div class="col-12 text-center">

        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

    </div>

    <?= form_close(); ?>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="<?= ADMIN_ASSETS ?>assets/js/page/frontend/auth.js?v=<?= filemtime('assets/js/page/frontend/auth.js') ?>"></script>
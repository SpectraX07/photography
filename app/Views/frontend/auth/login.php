<div>

    <?= form_open(route_to('login'), ['id' => 'loginForm', 'class' => 'row g-3']); ?>
    <div class="col-12">
        <label class="form-label">Email or Username</label>
        <input type="text" name="email-username" class="form-control">
        <div class="invalid-feedback"></div>
    </div>

    <div class="col-12">
        <label class="form-label">Password</label>
        <input type="text" name="password" class="form-control">
        <div class="invalid-feedback"></div>
    </div>



    <div class="col-12 text-center">

        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

    </div>

    <?= form_close(); ?>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="<?= ADMIN_ASSETS ?>assets/js/page/frontend/auth.js?v=<?= filemtime('assets/js/page/frontend/auth.js') ?>"></script>
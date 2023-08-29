<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Radio /</span> List
        </h4>
        <div class="card p-4">
            <div class="table-responsive text-nowrap">
                <table class='table' id="ajaxDtRadio">
                    <?= csrf_field(); ?>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Link</th>
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

<div class="modal fade" id="editRadioModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-edit">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="edit-title mb-2">Edit Radio</h3>
                </div>
                <?= form_open(route_to('update-radio'), ['id' => 'editRadioForm', 'class' => 'row g-3']); ?>
                <div class="col-12">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-11">
                    <label class="form-label">Image</label>
                    <input class="form-control" name="image" type="file">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-1 mt-4">
                    <div class="avatar mt-3">
                        <img class="imageHolder" src="" alt="Avatar">
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Link</label>
                    <input class="form-control" name="link" type="text" placeholder='Enter link'>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <div id="edit-description-editor"></div>
                    <span name="description"></span>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 text-center">
                    <input type="hidden" name='id'>
                    <input type="hidden" name='old_image'>
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addNewRadioModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-edit">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-2">
                    <h3 class="edit-title mb-2">Add Radio</h3>
                </div>
                <?= form_open(route_to('add-new-radio'), ['id' => 'addRadioForm', 'class' => 'row g-3']); ?>
                <div class="col-12">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12">
                    <label class="form-label">Image</label>
                    <input class="form-control" name="image" type="file">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12">
                    <label class="form-label">Link</label>
                    <input class="form-control" name="link" type="text" placeholder='Enter link'>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <div id="description-editor"></div>
                    <span name="description"></span>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
<script src="<?= ADMIN_ASSETS ?>assets/js/page/radio.js?v=<?= filemtime('assets/js/page/radio.js') ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('vendorCss') ?>
<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/quill/typography.css" />
<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/quill/katex.css" />
<link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/quill/editor.css" />
<?= $this->endSection() ?>

<?= $this->section('vendorJs') ?>
<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/quill/katex.js"></script>
<script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/quill/quill.js"></script>
<?= $this->endSection() ?>
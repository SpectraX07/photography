"use strict";
var ajaxDtSuperAdmin;
$(function () {

  const $xToken = $("[name='x-token']");

  if ($("#ajaxDtSuperAdmin").length) {
    ajaxDtSuperAdmin = $("#ajaxDtSuperAdmin").DataTable({
      dom: `<"row me-2"<"col-md-2"<"me-3"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>`,
      lengthMenu: [[25, 50, 70, 100], [25, 50, 70, 100]],
      buttons: [{
        text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add Super Admin</span>',
        className: "add-new btn btn-primary",
        attr: {
          "data-bs-toggle": "offcanvas",
          "data-bs-target": "#addAdminCanvas"
        }
      }],
      keys: true,
      language: {
        paginate: {
          previous: "<i class='fa-solid fa-angle-left'></i>",
          next: "<i class='fa-solid fa-angle-right'></i>"
        },
      },
      drawCallback: function () {
        $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
      },
      responsive: true,
      destroy: true,
      processing: true,
      serverSide: true,
      lengthChange: true,
      stateSave: true,
      searching: false,
      serverMethod: "get",
      ajax: {
        url: "users/ajax-get-super-admin-list",
        type: "post",
        data: function (data) {
          return {
            data: data,
            "x-token": $xToken.val()
          };
        },
        dataSrc: function (data) {
          $xToken.val(data.hash);
          return data.aaData;
        },
      },
      ordering: false,
      columns: [
        { data: "slNo" },
        { data: "name", class: "text-wrap" },
        { data: "phone" },
        { data: "gender" },
        { data: "status" },
        { data: "created_at" },
        { data: "action" }
        ],
    });
  }

  $('#addSuperAdminForm').on('submit', async function(e) {
    e.preventDefault();
    const main = $(this);
    const btn = main.find('[type="submit"]');
    const btnHtml = 'Submit';
    const formData = new FormData(main[0]);
    try {
      btn.prop('disabled', true).html('<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...');
      main.find('.invalid-feedback').html('');
      const response = await $.ajax({
        url: main.attr('action'),
        type: 'POST',
        data: formData,
        async: true,
        processData: false,
        contentType: false,
        dataType: 'json',
        cache: false
      });
      if (response.success) {
        $xToken.val(response.hash);
        $('#addAdminCanvas').offcanvas('hide');
        showToast('Success', response.message, 'success');
        ajaxDtSuperAdmin.draw();
      } else {
        $xToken.val(response.hash);
        if (typeof response.message !== 'undefined' && response.message !== '') {
          showToast('Warning!', response.message, 'warning');
        }
        $.each(response.errors, function (index, value) {
          main.find('[name="' + index + '"], ' + index)
          .siblings('div.invalid-feedback')
          .text(value)
          .show();
        });
      }
    } catch (error) {
      btn.prop('disabled', false).html(btnHtml);
    } finally {
      btn.prop('disabled', false).html(btnHtml);
    }
  });

  $(document).on("click", ".edit-super-admin", async function (e) {
    e.preventDefault();

    const id = $(this).attr("data-id");
    $('.invalid-feedback').html('');

    try {
      const response = await fetch(`${adminUrl}users/fetch-super-admin-details/${id}`);
      const data = await response.json();

      if (data.success) {
        const genderMap = {
          'Male': 1,
          'Female': 2,
          'Other': 3,
        };
        const gender = genderMap[data.row.gender];

        const editForm = $('#editSuperAdminForm');
        const editFields = [
          "old_image", "id", "name", "phone", "email", "username"
          ];

        editFields.forEach(field => {
          const fieldName = (field === 'username') ? 'user_name' : field;
          editForm.find(`[name='${field}']`).val(data.row[fieldName]);
        });

        editForm.find("[name='gender']").val(gender).change();
        editForm.find(".imageHolder").attr('src', data.row.image);

        $("#editAdminCanvas").offcanvas("show");
      } else {
        showToast('Warning!', data.message, 'warning');
      }
    } catch (error) {
    }
  });

  $('#editSuperAdminForm').on('submit', async function(e) {
    e.preventDefault();

    const main = $(this);
    const btn = main.find('[type="submit"]');
    const btnHtml = 'Submit';

    const formData = new FormData(main[0]);

    try {
      btn.prop('disabled', true).html('<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...');
      main.find('.invalid-feedback').html('');

      const response = await $.ajax({
        url: main.attr('action'),
        type: 'POST',
        data: formData,
        async: true,
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
      });

      $("[name='x-token']").val(response.hash);

      if (response.success) {
        $('#editAdminCanvas').offcanvas('hide');
        showToast('Success', response.message, 'success');
        ajaxDtSuperAdmin.draw();
      } else {
        if (response.message) {
          showToast('Warning!', response.message, 'warning');
        }
        $.each(response.errors, function(index, value) {
          main.find('[name="' + index + '"], ' + index)
          .siblings('div.invalid-feedback')
          .text(value)
          .show();
        });
      }
    } catch (error) {
      console.error('An error occurred:', error);
    } finally {
      btn.prop('disabled', false).html(btnHtml);
    }
  });


  $(document).on("click", ".delete-super-admin", async function(e) {
    e.preventDefault();
    const id = $(this).attr("data-id");

    const confirmationResult = await Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      customClass: {
        confirmButton: "btn btn-warning me-3",
        cancelButton: "btn btn-label-secondary",
      },
      buttonsStyling: false,
    });

    if (confirmationResult.isConfirmed) {
      try {
        const response = await $.ajax({
          url: `${adminUrl}users/delete-super-admin`,
          method: "POST",
          data: { id, "x-token": $("[name='x-token']").val() },
        });

        $("[name='x-token']").val(response.hash);

        if (response.success) {
          ajaxDtSuperAdmin.draw();
          showToast("Success", response.message, 'success');
        }
      } catch (error) {
        console.error('An error occurred:', error);
      }
    }
  });


  $(document).on("click", ".change-password", function (event) {
    event.preventDefault();
    $('#updateUserPasswordForm').find('[name="id"]').val($(this).attr("data-id"));
    $("#updateUserPasswordModal").modal("show");
  });

  $('#updateUserPasswordForm').on('submit', function(e){
    e.preventDefault();
    let main = $(this),
    btn = main.find('[type="submit"]'),
    btnHtml = 'Submit';

    const formData = new FormData(main[0]);
    $.ajax({
      url: main.attr('action'),
      type: 'POST',
      data: formData,
      async: true,
      beforeSend: function () {
        btn.prop('disabled', true).html('<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...');
        main.find('.invalid-feedback').html('');
      },
      success: function (data) {
        if (data.success) {
          $("[name='x-token']").val(data.hash);
          $('#updateUserPasswordModal').modal('hide');
          showToast('Success', data.message, 'success');
          ajaxDtSuperAdmin.draw();
        } else {
          $("[name='x-token']").val(data.hash);
          if (typeof data.message != 'undefined' && data.message != '') {
            showToast('Warning!', data.message, 'warning');
          }
          $.each(data.errors, function (index, value) {
            main.find('[name="'+index+'"], '+index).siblings('div.invalid-feedback').text(value).show();
          });
        }
      },
      error: function (response) {
        btn.prop('disabled', false).html(btnHtml);
      },
      complete: function(data, status, xhr) {
        btn.prop('disabled', false).html(btnHtml);
      },
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false
    });
  });

$(document).on("click", ".change-status", async function(e) {
  e.preventDefault();
  const id = $(this).attr('data-id');
  const status = $(this).attr('data-val');
  
  const confirmationResult = await Swal.fire({
    title: "Are you sure?",
    text: `You want to ${status} this user`,
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, change!",
    customClass: {
      confirmButton: "btn btn-success me-3",
      cancelButton: "btn btn-label-secondary",
    },
    buttonsStyling: false,
  });

  if (confirmationResult.isConfirmed) {
    try {
      const response = await $.ajax({
        url: `${adminUrl}users/change-status`,
        method: "GET",
        data: { id, status },
      });

      if (response.success) {
        ajaxDtSuperAdmin.draw();
        showToast("Success", response.message, 'success');
      } else {
        showToast('Error', response.message, 'error');
      }
    } catch (error) {
      console.error('An error occurred:', error);
    }
  }
});

});

const adminUrl = "/admin/";
var showToast = (title, message, type = "info") => {
  toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: "toast-top-right",
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    toastClass: "toast",
    preventDuplicates: true,
    newestOnTop: true,
    rtl: "rtl" === $("html").attr("dir"),
  };
  toastr[type](message, title);
};

$(function () {
  var e = $(".select2");
  e.length &&
    e.each(function () {
      var e = $(this);
      e.wrap('<div class="position-relative"></div>').select2({
        placeholder: e.attr("data-label"),
        dropdownParent: e.parent(),
      });
    });

  $(document).on("click", ".update-profile", async function (e) {
    e.preventDefault();

    $(".invalid-feedback").html("");
    const response = await fetch(adminUrl + `users/fetch-admin-details`);
    const data = await response.json();
    if (data.success) {
      $("#updateAdminProfileModalForm")
        .find("[name='old_image']")
        .val(data.row.oldImage);
      $("#updateAdminProfileModalForm").find("[name='id']").val(data.row.id);

      $("#updateAdminProfileModalForm")
        .find(".imageHolder")
        .attr("src", data.row.image);
      $("#updateAdminProfileModalForm")
        .find("[name='user_name']")
        .val(data.row.user_name);
      $("#updateAdminProfileModalForm")
        .find("[name='email']")
        .val(data.row.email);

      $("#updateAdminProfileModal").modal("show");
    } else {
      showToast("Warning!", data.message, "warning");
    }
  });

  $("#updateAdminProfileModalForm").on("submit", function (e) {
    e.preventDefault();
    let main = $(this),
      btn = main.find('[type="submit"]'),
      btnHtml = "Submit";

    const formData = new FormData(main[0]);

    $.ajax({
      url: main.attr("action"),
      type: "POST",
      data: formData,
      async: true,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        main.find(".invalid-feedback").html("");
      },
      success: function (data) {
        if (data.success) {
          $("[name='x-token']").val(data.hash);
          $("#updateAdminProfileModal").modal("hide");
          showToast("Success", data.message, "success");
        } else {
          $("[name='x-token']").val(data.hash);

          $.each(data.errors, function (index, value) {
            main
              .find('[name="' + index + '"], ' + index)
              .siblings("div.invalid-feedback")
              .text(value)
              .show();
          });
        }
      },
      error: function (response) {
        btn.prop("disabled", false).html(btnHtml);
      },
      complete: function (data, status, xhr) {
        btn.prop("disabled", false).html(btnHtml);
      },
      dataType: "json",
      cache: false,
      contentType: false,
      processData: false,
    });
  });

  $(document).on("click", ".update-password", function (event) {
    event.preventDefault();
    $("#updateAdminPassword").modal("show");
  });

  $(document).on("submit", "#updateAdminPasswordForm", function (event) {
    event.preventDefault();
    var formdata = new FormData($("#updateAdminPasswordForm")[0]);
    formdata.append("x-token", $("[name='x-token']").val());
    let main = $(this),
      btn = main.find('[type="submit"]');
    var btnHtml = "Submit";
    $.ajax({
      url: "users/update-admin-password",
      method: "POST",
      data: formdata,
      processData: false,
      contentType: false,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        $(".invalid-feedback").html("");
      },
      success: function (response) {
        $("[name='x-token']").val(response.hash);
        showToast("Success", response.message, "success");
        $("#updateAdminPassword").modal("hide");
      },
      error: function (response) {
        btn.prop("disabled", false).html(btnHtml);
      },
      complete: function (data, status, xhr) {
        btn.prop("disabled", false).html(btnHtml);
      },
    });
  });
});

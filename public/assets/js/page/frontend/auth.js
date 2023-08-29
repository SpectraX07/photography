$(document).ready(function () {
  $(document).on("submit", "#signupForm", function (e) {
    e.preventDefault();
    let main = $(this),
      btn = main.find('[type="submit"]'),
      btnHtml = "Submit";

    const formData = new FormData(main[0]);
    $.ajax({
      url: main.attr("action"),
      type: "POST",
      data: formData,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        main.find(".invalid-feedback").html("");
      },
      success: function (data) {},
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

  $(document).on("submit", "#verificationForm", function (e) {
    e.preventDefault();
    let main = $(this),
      btn = main.find('[type="submit"]'),
      btnHtml = "Submit";

    const formData = new FormData(main[0]);
    $.ajax({
      url: main.attr("action"),
      type: "POST",
      data: formData,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        main.find(".invalid-feedback").html("");
      },
      success: function (data) {},
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

  $(document).on("submit", "#loginForm", function (e) {
    e.preventDefault();
    let main = $(this),
      btn = main.find('[type="submit"]'),
      btnHtml = "Submit";

    const formData = new FormData(main[0]);
    $.ajax({
      url: main.attr("action"),
      type: "POST",
      data: formData,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        main.find(".invalid-feedback").html("");
      },
      success: function (data) {},
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
});

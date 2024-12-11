function adsenseSave(adsense_id) {
  "use strict";

  document.getElementById("google_adsense_edit_button").disabled = true;
  document.getElementById("google_adsense_edit_button").innerHTML =
    "Please Wait...";

  var formData = new FormData();
  formData.append("id", adsense_id);
  formData.append("script_code", $("#script_code").val());
  formData.append("adsense_type", $("#adsense_type").val());
  formData.append("status", $("#status").val());

  $.ajax({
    type: "post",
    url: "/dashboard/admin/google-adsenses",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      toastr.success("Data saved succesfully.");
      document.getElementById("google_adsense_edit_button").disabled = false;
      document.getElementById("google_adsense_edit_button").innerHTML = "Save";
      window.location.href = "/dashboard/admin/google-adsenses";
    },
    error: function (data) {
      var err = data.responseJSON.errors;
      $.each(err, function (index, value) {
        toastr.error(value);
      });
      document.getElementById("google_adsense_edit_button").disabled = false;
      document.getElementById("google_adsense_edit_button").innerHTML = "Save";
    },
  });
  return false;
}

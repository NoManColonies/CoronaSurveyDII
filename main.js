$(document).ready(function() {
  $("input[type=text]").change(function() {
    var fd = new FormData();
    fd.append($(this).attr("name"), $(this).val());
    $.ajax({
      url: 'form_update.php',
      type: 'get',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response) {
        if (response == "done") {
          console.log("saved");
        } else {
          console.log("saving failed");
        }
      },
    });
  });
  $("input[type=radio]").change(function() {
    var fd = new FormData();
    var this = $(this);
    fd.append(this.attr("name"), this.val());
    $.ajax({
      url: 'form_update.php',
      type: 'get',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response) {
        if (response == "done") {
          console.log("saved");
        } else {
          console.log("saving failed");
        }
      },
    });
  });
  $("input[type=checkbox]").change(function() {
    var fd = new FormData();
    var this = $(this);
    if (this.is(":checked")) {
      fd.append(this.attr("name"), "true");
    } else {
      fd.append(this.attr("name"), "false");
    }
    $.ajax({
      url: 'form_update.php',
      type: 'get',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response) {
        if (response == "done") {
          console.log("saved");
        } else {
          console.log("saving failed");
        }
      },
    });
  });
});

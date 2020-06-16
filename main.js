$(document).ready(function() {
  $("input[type=text]").change(function() {
    var fd = new FormData();
    fd.append($(this).attr("name"), $(this).val());
    $.ajax({
      url: 'form_update.php',
      type: 'post',
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
    var target = $(this);
    fd.append(target.attr("name"), target.val());
    $.ajax({
      url: 'form_update.php',
      type: 'post',
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
    var target = $(this);
    if (target.is(":checked")) {
      fd.append(target.attr("name"), "true");
    } else {
      fd.append(target.attr("name"), "false");
    }
    $.ajax({
      url: 'form_update.php',
      type: 'post',
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


$('#fw-backend-Dashboard').click(function() {
  //* __
  $.post("content/dashboard.php", {}, function(data) {
    $('#fw-mainpage').html(data);
  });
});
$('#fw-backend-Bereich').click(function() {
  //* __
  $.post("content/Bereich.php", {}, function(data) {
    $('#fw-mainpage').html(data);
  });
});
$('#fw-backend-Tag').click(function() {
  //* __
  $.post("content/Tag.php", {}, function(data) {
    $('#fw-mainpage').html(data);
  });
});
$('#fw-backend-Ausbildung').click(function() {
  //* __
  $.post("content/Ausbildung.php", {}, function(data) {
    $('#fw-mainpage').html(data);
  });
});

<?php
include_once "include/util.php";

function get_view($zone) {
  if (!$zone) {
    $zone = date_default_timezone_get();
  }
  renderTemplate(
    "views/index.php",
    array(
      'title' => 'PHP Timezones',
      'zone' => $zone
    )
  );
}
?>
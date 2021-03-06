<?php
include_once "include/util.php";
include_once "include/timezones.php";

function get_view($zone) {
  global $timezones;
  
  if (!$zone) {
    $zone = date_default_timezone_get();
  } else {
    $zone = str_replace('-', '/',  $zone);
  }
  
  date_default_timezone_set($zone);
  renderTemplate(
    "views/index.php",
    array(
      'title' => 'PHP Timezones',
      'current_zone' => $zone,
      'timezones' => $timezones
    )
  );
}

function post_view() {
  $zone = safeParam($_POST, 'timezone', date_default_timezone_get());
  redirect("/timezone/view/$zone");
}
?>
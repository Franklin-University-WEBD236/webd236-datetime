<?php
include_once "include/util.php";

function get_index() {
  redirect('timezone/view?z=' . urlencode(date_default_timezone_get()));
}
?>
<?php
include_once "include/util.php";

function get_index() {
  redirect('timezone/view/' . preg_replace('/\//', '-', date_default_timezone_get()));
}
?>
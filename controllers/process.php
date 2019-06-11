<?php
include_once "include/util.php";

function dumpArray($elements) {
  $result = "<ol>\n";
  foreach ($elements as $key => $value) {
    if (is_array($value)) {
      $result .= "<li>Key <b>$key</b> is an array
          containing:" . dumpArray($value) . "</li>\n";
    } else {
      $value = nl2br(htmlspecialchars($value)); 
      $result .= "<li>Key <b>$key</b> has value <b>$value</b></li>\n";
    }
  }
  return $result . "</ol>\n";
}

function checkAccount() {
  $errors = array();

  if (!$_POST['firstName']) {
    $errors['firstName'] = "First name may not be empty.";
  }
  if (!$_POST['lastName']) {
    $errors['lastName'] = "Last name may not be empty.";
  }
  if (!$_POST['email1']) {
    $errors['email1'] = "Email address may not be empty.";
  }
  if (!$_POST['email2']) {
    $errors['email2'] = "Confirmed email address may not be empty.";
  }
  if (!$_POST['password1']) {
    $errors['password1'] = "Password may not be empty.";
  }
  if (!$_POST['password2']) {
    $errors['password2'] = "Password may not be empty.";
  }
  if ($_POST['email1'] != $_POST['email2']) {
    $errors['emailMismatch'] = "Email addresses do not match";
  }
  if ($_POST['password1'] != $_POST['password2']) {
    $errors['passwordMismatch'] = "Passwords do not match";
  }

  return $errors;

}

function post_account() {
  $errors = checkAccount();
  if ($errors) {
    $params['title'] = 'PHP Forms Examples';
    $params[
    renderTemplate(
      "views/index.php",
      array(
        'title' => 'PHP Forms Examples',
        'accountErrors'] = $errors;
      )
    );
  } else {
    renderTemplate(
      "views/process.php",
      array(
        'title' => 'PHP Forms Examples variable dump',
        'variables' => $_POST
      )
    );
  }
}

function post_contact() {
  renderTemplate(
    "views/process.php",
    array(
      'title' => 'PHP Forms Examples variable dump',
      'variables' => $_POST
    )
  );
}

?>
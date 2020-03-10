<?php
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: index.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");


// LIBRARIES
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-comments.php";
$pdo = new Comments();

/* [HANDLE AJAX REQUESTS] */
switch ($_POST['req']) {
  /* [INVALID REQUEST] */
  default:
    echo "ERR";
    break;

  /* [EDIT COMMENT] */
  case "edit":
    echo $pdo->edit($_POST['comment_id'], $_POST['name'], $_POST['message']) ? "OK" : "ERR";
    break;

  /* [DELETE COMMENT] */
  case "del":
    echo $pdo->delete($_POST['comment_id']) ? "OK" : "ERR";
    break;
}
?>
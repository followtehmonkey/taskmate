﻿<?php
session_start();
include_once 'functions/User.class.php';
$user = new User();
$id = $_SESSION['id'];
if (!$user->get_session()){
	header("location:login.php");
}
if (isset ($_GET['q']) && $_GET['q'] == 'logout')	{
	$user->user_logout();
	header("location:login.php");
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>taskmate</title>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.7.1.custom.min.js"></script>
<link rel='stylesheet' href='styles.css' type='text/css' media='all' />
<script type="text/javascript">
  // When the document is ready set up our sortable with it's inherant function(s)
  $(document).ready(function() {
	$("#test-list").load("functions/fetchListFromDB.php");
    $("#test-list").sortable({
      handle : '.handle',
      update : function () {
		  var order = $('#test-list').sortable('serialize');
  		$("#info").load("functions/processSortable.php?"+order);
      }
    });
});
</script>
</head>

<body>
<a href="?q=logout">LOGOUT</a>
<h1> Hello <?php $user->get_fullname($id); ?></h1>
<ul id="test-list">Loading list...
</ul>
<form action="functions/addNewItem.php" method = "post">
<p><input type='text' name='newItem' class ='newItem'/></p>
<p><button type='submit'>Lägg till</button></p>
</form>
</body>
</html>
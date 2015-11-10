<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

	    <title>Benny's Printery</title>

	    <!-- Bootstrap core CSS -->
	    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    	<div class="block">
			<div class="navbar navbar-inner block-header">
				<div class="muted pull-left">Profile</div>
			</div>
			<div class="block-content collapse in">
				<p>something</p>
				<p><?php echo $_SESSION['userfirst'];?></p>
			</div>
    </body>


</html>
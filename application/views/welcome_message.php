<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TITLE -->
    <!-------------------------------------------------------------------------->
    <title>Welcome to CodeIgniter</title>
    <!-------------------------------------------------------------------------->
    <!-- Bootstrap-->
    <!-------------------------------------------------------------------------->


    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-------------------------------------------------------------------------->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div id="container">

	<h1>Welcome to CodeIgniter!</h1>

    <div id="body">

        <i class="fa fa-buysellads"></i>
        <i class="fa fa-folder-open"></i>

        <?php echo base_url(); ?>
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>


	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</div>

</body>
</html>
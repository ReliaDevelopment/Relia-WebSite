<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
		<link rel="stylesheet" href="css/alertify/alertify.rtl.css">
		<link rel="stylesheet" href="css/alertify/themes/default.rtl.css">
  </head>
  <body>
		<script src="js/alertifyjs/alertify.js"></script>
		<?php
			$to = "reliadevelopment@gmail.com"; /*Your Email*/
			$subject = "Sent from Website"; /*Issue*/
			$date = date ("l, F jS, Y");
			$time = date ("h:i A");
			$Email=$_REQUEST['Email'];

			$msg="
			Name: $_REQUEST[Name]
			Email: $_REQUEST[Email]
			Phone: $_REQUEST[Phone]

			Message sent from website on date  $date, hour: $time.\n

			Message:
			$_REQUEST[message]";

			if ($Email=="") {
				alertify.error('Please enter your email');
			}
			else{
				mail($to, $subject, $msg, "From: $_REQUEST[Email]");
				?>
				<script type="text/javascript">
					alertify.success('Mensaje enviado correctamente');
				</script>
				<?php
			}
		?>
  </body>
</html>

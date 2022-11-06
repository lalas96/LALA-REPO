<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://kit.fontawesome.com/810a42b0a7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="mobile.css">
		<title>Document</title>
	</head>

	<body >
		<div class="box5">
			<form action="email.php" enctype="multipart/form-data" method="POST">
				<label>Mail : </label>
				<input name="email" type="text" placeholder="Your mail adress">
				<input type="text" name="name" id="name" placeholder="Vaše cijenjeno ime">
				<input type="text" name="message" id="message" placeholder="Vaša super poruka">
				<input type="hidden" name="MAX_FILE_SIZE" value="300000" /> <?php // max file size 300kB ?>
				<input type="file" name="file" id="file" />
				<input type="submit" value="Send" name="submit">
			</form>
		</div>
	</body>
</html>

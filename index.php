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
				<label for="email">Mail: </label>
				<input name="email" id="email" type="text" placeholder="Your mail adress">
				<input name="name" id="name" type="text" placeholder="Vaše cijenjeno ime">
				<input name="message" id="message" type="text" placeholder="Vaša super poruka">
				<input name="MAX_FILE_SIZE" type="hidden" value="300000" /> <?php // max file size 300kB ?>
				<input name="file" id="file" type="file" />
				<input type="submit" value="Send" name="submit">
			</form>
		</div>
	</body>
</html>

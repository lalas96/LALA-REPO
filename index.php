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



    <div class="box2">
   <form  action="upload.php" method="POST"  enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Send" name="submit">
      </form> 
</div>    


<div class="box3">
        <form action="sveskupa.php" method="POST"  enctype="multipart/form-data">
        <input type="file"  name="fileToUpload" id="fileToUpload" hidden="hidden"/> 

<button type="button" id="custom-button">CHOOSE A FILE</button>
<span id="custom-text">No file chosen, yet.</span>
<input type="submit" value="Send" name="submit">
</form>
</div>

<div class="box4">
    <form action="formattachment.php" method="POST"  enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Send" name="submit">
</form>
</div>

<div class="box5">
    <form action="email.php" method="POST"  enctype="multipart/form-data">
    <label>Mail : </label>
    <input name="email" type="text" placeholder="mail adress">
    <div class="box">

    &nbsp;

    <input type="file" name="file" id="file" class="inputfile inputfile-5"  />
    <input type="submit" value="Send" name="submit">
    </form>
</div>


<div class="box6">
    <form action="file.php" method="get">
        First name: <input type="text" name="a">
        <button>Press</button>
        </form>
</div> 




<!-- <div class="box4">
    <form action="formattachment.php" method="POST"  enctype="multipart/form-data">
    <input type="file"  name="fileToUpload" id="fileToUpload" hidden="hidden"/> 
    
<button type="button" id="custom-button">CHOOSE A FILE</button>
<span id="custom-text">No file chosen, yet.</span>
<input type="submit" value="Send" name="submit">
</form> -->

    <script src="app.js"></script>
</body>
</html>
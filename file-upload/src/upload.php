<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $tmp = $file['tmp_name'];
    $name = $file['name'];
    $type = $file['type'];
    if ($type == "image/jpeg" || $type == "image/png") {
        if (!move_uploaded_file($tmp, 'uploads/' . $name)) {
            die('<h2>Your image was not uploaded.</h2>');
        } else {
            die("<h2>/uploads/$name succesfully uploaded!</h2>");
        }
    } else {
        die('Don\'t hack pls ;(');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>
    <div class="upload-form">
        <form enctype="multipart/form-data" action="/upload.php" method="post">
            <input type="file" name="file">
            <input type="submit" name="upload" value="Upload">
        </form>
    </div>
</body>

</html>
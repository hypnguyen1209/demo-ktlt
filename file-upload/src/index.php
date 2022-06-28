<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Storage</title>
</head>
<style>
    .nav,
    .list {
        margin-bottom: 1em;
        font-size: large;
        border-width: 1px;
        border-style: solid;
        border-color: black;
    }
</style>

<body>
    <div class="nav">
        [<a href="/upload.php"> Upload </a> ]
    </div>
    <div class="list">
        <ul>
            <?php
            if ($handle = opendir('uploads/')) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        echo "<li><a href=\"/uploads/$entry\">$entry</a></li>\n";
                    }
                }
                closedir($handle);
            }
            ?>
        </ul>
    </div>
</body>

</html>
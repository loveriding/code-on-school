<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>upload file</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload" value="">
    <input type="submit" name="up" value="Upload">
</form>
<?php


if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    $target_file =basename($_FILES["fileUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        if ($_FILES["fileUpload"]["size"] > 1024 * 1024 * 5) {
            echo "Sorry, your file is too large.";
        }
        else {

            if($imageFileType != "jpg" && $imageFileType != "mp3" && $imageFileType != "mp4") {
                 echo "Sorry, only JPG, MP3, MP4 files are allowed.";
            }
            else {

            move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'uploads/' . $_FILES['fileUpload']['name']);
            echo "upload thành công <br/>";
            echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
            echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
            echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
            }
        }
    }
}
?>
</body>
</html>
<?php
if (isset($_POST['remove_file'])){
    $file_path = $_POST['fileToRemove'];

/*    if (file_exists($file_path)){
        unlink($file_path);
        echo 'File Delete Success.';
    }else{
        echo $file_path.' File Not Found';
    }*/
if (empty($file_path)){
    echo '<h2 style="color: red;">File Empty.</h2>';
    echo "<script>confirm('Data Empty.');</script>";
    exit('Please ...');
    }else{

    if (file_exists('image/'.$file_path)){
        unlink('image/'.$file_path);
        echo "<script>confirm('Data Deleted Successfully.');</script>";
        echo '<h2 style="color: green;">File Delete Success.</h2>';
    }else{
        echo '<h2 style="color: darkgoldenrod;">'.$file_path.'</h2><h2 style="color: red;"> File Not Found.</h2>';
    }
}

 /*   $include_folder_file_path = 'image/'.$file_path;

    if (file_exists($include_folder_file_path)){
        unlink($include_folder_file_path);
        echo 'File Delete Success.';
    }else{
        echo $file_path.' File Not Found';
    }*/
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php delete file from folder</title>
</head>
<body>
<form action="" method="post">
    File_Path : <input type="text" name="fileToRemove" title="Enter your folder/file_name.jpg or file_name.jpg" placeholder="Enter folder/file_name.jpg"><br><br>
    <input type="submit" name="remove_file" value="Remove File">
</form>
</body>
</html>

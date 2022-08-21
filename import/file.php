<!DOCTYPE html>
<?php
    $FileName=$_FILES['fuResume'] ['name'];
    $TmpName=$_FILES['fuResume'] ['tmp_name'];
    $target_dir = "../uploads/";

    move_uploaded_file($TmpName,$target_dir.$FileName);
    echo('Đã tải lên thành công!')
?>
<html>
    <body>
    <a href="https://thowmrsspc.herokuapp.com/">
     <input type="submit"/>
   </a>
    </body>
</html>

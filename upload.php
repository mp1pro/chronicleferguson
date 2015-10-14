<?php
if (isset($_POST['log'])){
    echo "test";
    $nm=$_POST['nm'];
    $date=$_POST['date'];

    foreach($_FILES['files']['tmp_name'] as $key => $name_tmp){
        $name= $_FILES['files']['name'][$key];
        $tmpnm= $_FILES['files']['tmp_name'][$key];
        $type= $_FILES['files']['type'][$key];
        $size= $_FILES['files']['size'][$key];
        $dir="images/".$name;
        $move = move_uploaded_file($tmpnm,$dir);

        if ($move){
            echo "success";
        }
        else
        {
            echo "fail";
        }
    }
}
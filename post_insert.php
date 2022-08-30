











<?php

include 'conn.php';

$data = $_POST['data'];

$sql = "INSERT INTO `hadith`( `data`) VALUES ('$data')";

$result = mysqli_query($conn,$sql);
if($result){
    echo "data inserted";
    header("Location:http://localhost/client/post_select.php");
}else{
    echo "not inserted";
}

?>
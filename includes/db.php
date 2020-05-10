<?php 

$connection = mysqli_connect("localhost", 'root', 'root', 'cms');
if(!$connection){
    die("error".mysqli_error($connection));
}else{
    echo "we are connected";
}

?>
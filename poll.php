<?php 
    $input = file_get_contents('php://input');
    if(strcmp($input, "") != 0){
        header('Location:https://www.google.com');
    }


?>
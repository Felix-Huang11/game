<?php 
$input = file_get_contents("php://input");
// $myfile = fopen("data.txt","w+");
// fwrite($myfile,$input);
// fclose($myfile);
file_put_contents("data.txt", $input);

?>


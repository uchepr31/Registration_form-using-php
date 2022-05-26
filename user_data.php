<?php

$data = print_r($_POST);  //this enable us to print out the data coming from the form into our browser

$file_open = fopen("userdata.csv", "a");
$no_rows = count(file("userdata.csv"));
if($no_rows > 1)
{
 $no_rows = ($no_rows - 1) + 1;
}

fputcsv($file_open, $_POST); //this is used to convert the opened file into a .csv file format and then write something into the file
fclose($file_open);

?>



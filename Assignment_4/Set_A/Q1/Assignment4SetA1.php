<?php
//File name that is to be read
$fileName = 'contact.dat';
//Check if file exists
if(!file_exists($fileName))
 die("File $fileName does not exists");
//Open file in read mode
$fp = fopen($fileName,'r');
//Create table header i.e column names
$response = '<table border="1"><thead><th>Sr.No</th><th>Name</th><th>Pin Code</th><th>Mobile Number</th><th>City</th></thead>';
//Traverse the file line by line and put contents into array and explore the array
while(! feof($fp))
{
 //Get the file contents line by line
 $row = fgets($fp);
 //Explode the line/row on the basis of space and create an array
 $row = explode(' ',$row);
 //Access the index array for details
 $response.= "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
}
//Close the file which was opened.
fclose($fp);
//Print the output
echo $response;
?>

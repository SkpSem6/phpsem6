<?php
  $file = fopen('contact.dat',r);
  echo "<table border = 1>";
  echo "<tr><th>sr no </th><th>Name</th><th>Residence No </th><th>Mobile No</th></tr>";
while($row = fscanf($file , "%s  %s  %s %s"))
{
    echo "<tr>";
    
    foreach($row as $r)
    {
      echo "<td> $r </td>";
    }
    echo "</tr>";
}
echo "</table>";
fclose($file);
?>

<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("supporters.txt","r");

while(! feof($file))
  {
  var info = explode(" ||| ", fgets($file));
  
  var user = info[0];
  var msg = info[1];
  var dt = info[2];
  

    
  echo user. "'s said ".msg." on ".dt."<br />";
  }

fclose($file);

?>

</body>
</html>

<?php
  if(preg_match("/\w+@\w+\.\w{2}/", $_GET['reg'])){
  	echo "<h1>Die Eingabe war korrekt</h1>";
  }else{
  	echo "<h1>Die Eingabe war nicht korrekt</h1>";
  }
?>
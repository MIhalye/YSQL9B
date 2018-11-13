<?php
  if(ereg("[1234567]", $_GET['reg'])){
  	echo "<h1>Die Eingabe war korrekt</h1>";
  }else{
  	echo "<h1>Die Eingabe war nicht korrekt</h1>";
  }
?>
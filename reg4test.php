<?php
echo "<h1>Die entsch&auml;rfte Eingabe</h1>".
ereg_replace ("[<|>|$|%|&|§]", "#", $_GET['reg']) ;
?>
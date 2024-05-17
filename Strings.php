<?php
$str ="This is String ree";
echo $str;
$lenn = strlen($str);
echo "<br>This is length of string ".$lenn." Thank you";
echo "<br>The no of words of string ".str_word_count($str).". Thank you";
echo "<br>The reversed string is ".strrev($str).". Thank you";
echo "<br> The postion of 'is' is". " ".strpos($str,"ree"). "  Understand";
echo "<br> The replace of This into that: ".str_replace("is","at",$str);


?>
<?php

$obj = new main();
$text="Proff Keith Williams";
$obj-> printthis($text);
$text_1="Thursday Class is Web Systems Development";
$obj-> str_word_count($text_1);
$obj-> str_shuffle($text_1);
class main{

public function __construct()
{
echo '<h1>IS601</h1><br>';
}
public function printthis($text)
{
echo '<h2>Web Systems Development</h2>';
print($text);
echo'<hr>';
}
public function str_word_count($text_1)
{
$output = str_word_count($text_1);
echo"How many words in the sentence:$text_1";
echo'output--->'.$output;
echo'<hr>';
}
public function str_shuffle($text_1)
{
$output2 = str_shuffle($text_1);
echo"Shuffle the sentence:$text_1:<br>";
echo'output--->'.$output2;
echo'<hr>';
}
}
?>

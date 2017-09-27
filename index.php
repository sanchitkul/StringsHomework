<?php

$obj = new main();
$text="Proff Keith Williams";
$obj-> printthis($text);
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






}
?>

<?php
echo "hello";

// basic
$name = "john";
$age = 12;
$height = 12.2;

// concatenate
echo "Name: "  . $name . "(" . gettype($name) . ")<br>"; // gettype($var) will tell you what type is the $var
echo "Age: "  . $age . "(" . gettype($age) . ")<br>";
echo "Height: "  . $height . "(" . gettype($height) . ")<br>";

echo "<ul>\n";
echo "<li> Name: "  . $name . "(" . gettype($name) . ")</li>"; // gettype($var) will tell you what type is the $var
echo "<li>Age: "  . $age . "(" . gettype($age) . ")</li>";
echo "<li>Height: "  . $height . "(" . gettype($height) . ")</li>";
echo "</ul>\n";

$height *= 100;

// can use $var inside ""
echo "Name is $name ($age years old, and the height is $height cm)";


// function
function greet($name)
{
    echo "hello $name";
}

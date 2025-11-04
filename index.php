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
greet("joe");

function greet1($name): void // can specify the type of the return type of the function too
{
    echo "hello $name";
}

function even($number): bool
{
    if ($number % 2 === 0) {
        return true;
    }
    return false;
}

echo even(12);

$number = 23;
if (even($number)) {
    echo "the number $number is even";
} else {
    echo "the number $number is odd";
}


// shorter version of if function above
echo "the number $name is " . even($number) ? "even" : "odd" . "<br>\n";

// loop
for ($i = 0; $i < 5; $i++) {
    echo $i . ($i === 4 ? ". " : ", ");
}

// while loop
$i = 1;
while ($i <= 5) {
    echo $i . ($i === 5 ? ". " : ", ");
    $i++;
}

// do while
$i = 1;
do {
    echo $i . ($i === 5 ? ". " : ", ");
    $i++;
} while ($i <= 5);

// for each
$array = [1, 2, 3, 4, 5];
// or 
$arr = array(6, 7, 8, 9, 10);
foreach ($array as $i) {
    echo $i . " ";
}

// when we want to display the index of the number in the array as well
foreach ($arr as $key => $value) {
    echo $value . ($key === sizeof($arr) - 1) ? " " : ", ";
}


// dictionary
$colors = array("red" => "#F00", "green" => "#0F0", "blue" => "#00F");
foreach ($colors as $key => $value) {
    echo "$key (" . "$value)" . "<br>\n";
}

// superglobal variables
if (isset($_GET["name"])) {
    $get_name = $_GET["name"];
    echo "Name: $get_name";
    // for example: url is ?name=Joe&age=10&height=123
}

?>

<!-- post method create an assoicative array ["username" => "joe", "email" => "joe@gmail.com"] -->
<form method="POST"> <!-- $_POST -> associative array -->
    <input type="text" name="username" value="Joe">
    <input type="text" name="email" value="Joe@gmail.com">
    <button type="submit">Submit</button>
</form>
<?php
echo "Hello, World!"."</br>";

//varriables in php
$name = "Alice"."</br>";
$age = 30;
echo "Name: " . $name . "Age: " . $age;

//loops in php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: " . $i . "</br>";
}

//arrays in php with foreach loop
$fruits = array("Apple", "Banana", "Cherry");
foreach ($fruits as $fruit) {
    echo "Fruit: " . $fruit . "</br>";
}

//function in php
function greet($name) {
    return "Hello, " . $name . "!" . "</br>";
}
echo greet("NurAlom");


//conditional statements in php
//if-else ladder to determine grade based on marks
$marks = 85;

if ($marks >= 80 && $marks <= 100) {
    echo "Grade: A+" . "</br>";
} elseif ($marks >= 70 && $marks < 80) {
    echo "Grade: A" . "</br>";
} elseif ($marks >= 60 && $marks < 70) {
    echo "Grade: A-" . "</br>";
} elseif ($marks >= 50 && $marks < 60) {
    echo "Grade: B" . "</br>";
} elseif ($marks >= 40 && $marks < 50) {
    echo "Grade: C" . "</br>";
} elseif ($marks >= 33 && $marks < 40) {
    echo "Grade: D" . "</br>";
} elseif ($marks >= 0 && $marks < 33) {
    echo "Grade: F" . "</br>";
} else {
    echo "Invalid marks" . "</br>";
}

//switch-case statement in php
$day = 3;
switch ($day) {
    case 1:
        echo "Monday" . "</br>";
        break;
    case 2:
        echo "Tuesday" . "</br>";
        break;
    case 3:
        echo "Wednesday" . "</br>";
        break;
    case 4:
        echo "Thursday" . "</br>";
        break;
    case 5:
        echo "Friday" . "</br>";
        break;
    case 6:
        echo "Saturday" . "</br>";
        break;
    case 7:
        echo "Sunday" . "</br>";
        break;
    default:
        echo "Invalid day" . "</br>";
        break;
}

?>
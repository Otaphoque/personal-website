<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question 1</title>
</head>
<body>

<h1>Question 1 | Part A</h1>

<form method="post">
    <label for="n">Enter a positive number: </label><input id="n" name="n" type="text">
    <input type="submit" value="Enter" class="button" name="submit1">
</form>

<?php

if (isset($_POST['submit1'])) { //to check if the form was submitted
    $n = $_POST['n'];
    if (!is_numeric($n)) {
        echo "The input should be a number";
    } else if ($n < 0) {
        echo "The input should be a positive number";
    } else {
        for ($result = 0, $i = 1; $i <= $_POST['n']; $i++) {
            $result += $i;
        }
        echo "The result is: " . $result;
    }
}
?>

<h1>Question 1 | Part B</h1>

<form method="post">
    <label for="string">Enter a String: </label><input id="string" name="string" type="text">
    <input type="submit" value="Enter" class="button" name="submit2">
</form>

<?php
if (isset($_POST['submit2']))
    echo "The result string is: " . ucwords($_POST['string']);
?>

<h1>Question 1 | Part C</h1>

<form method="post">
    <label for="numbers">Enter a list of Integers, separated by a comma: </label><input id="numbers" name="numbers"
                                                                                        type="text">
    <input type="submit" value="Enter" class="button" name="submit3">
</form>

<?php
if (isset($_POST['submit3'])) {
    $array = explode(", ", $_POST['numbers']);
    echo "The average is : " . array_sum($array) / count($array);
    echo "<br>";
    sort($array);
    if (count($array) % 2 != 0) echo "The median is: " . $array[(int)count($array) / 2];
    else echo "The median is: " . ($array[((int)count($array) / 2) - 1] + $array[(int)count($array) / 2]) / 2;
}
?>

<h1>Question 1 | Part D</h1>

<form method="post">
    <label for="numbers">Enter a list of Integers, separated by a space: </label><input id="numbers" name="numbers" type="text">
    <input type="submit" value="Enter" class="button" name="submit4">
</form>

<?php
if (isset($_POST['submit4'])) {
    displayNumbers($_POST['numbers']);
}
function displayNumbers($array) {
    $array = explode(" ", $array);
    if (count($array) >= 4) {
        echo "The first four numbers are :" . $array[0] . " " . $array[1] . " " . $array[2] . " " . $array[3];
        return true;
    } else {
        echo "There aren't four numbers in the string";
        return false;
    }
}
?>

</body>
</html>
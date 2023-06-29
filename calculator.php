<?php
$number1 = intval($_GET['num1']);
$number2 = intval($_GET['num2']);
$operator = $_GET['op'];

if($operator == '+'){
    echo("The Sum is : ".($number1 + $number2));
}
else if($operator == '-'){
    echo("The Difference between Two Number is : ".($number1 - $number2));
}
else if($operator == '*'){
    echo("Multiplication of Two Number is : ".($number1 * $number2));
}
else if($operator == '/'){
    echo("Dividing Two Numbers : ".($number1 / $number2));
}
else{
    echo("As of Now +,-,/,* are Supported.");
}
?>
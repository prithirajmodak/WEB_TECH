<html>
    <body>
        <h2>First PHP</h2>
<?php
echo "Hello, World!<br>";

$name = "Prithiraj Modak";
$id = "23-50007-1";

echo "My name is $name and my ID is $id.<br>";
echo "<br>";
echo "<br>";

// Exercise 1
echo "Exercise 1<br>";
$length = 50;
$width = 60;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area is: $area.<br>";
echo "Perimeter is: $perimeter.<br>";
echo "<br>";
echo "<br>";

// Exercise 2
echo "Exercise 2<br>";

$amount = 500;
$vat = 10;

$after_tax = $amount + $amount * ($vat / 100);
echo "Total amount: $after_tax.";
echo "<br>";
echo "<br>";

// Exercise 3
echo "Exercise 3<br>";
$num = 5;

if($num % 2 == 0){
    echo "Number is EVEN<br>";
}else{
    echo "Number is ODD<br>";
}
echo "<br>";
echo "<br>";

// Exercise 4
echo "Exercise 4<br>";

$num1 = 10;
$num2 = 51;
$num3 = 33;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Largest number is: $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest number is: $num2";
} else {
    echo "Largest number is: $num3";
}

echo "<br>";
echo "<br>";

// Exercise 4
echo "Exercise 5<br>";

for($i =10; $i <=100; $i++){
    if($i % 2 != 0){
        echo "$i ";
    }
}

echo "<br>";
echo "<br>";





?>

</body>
</html>
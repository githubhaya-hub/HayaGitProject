<?php

$color='red' ;
echo "Hello mrs.Haya Alaa edin" ;
echo '<br>' ;
echo $color ;
$red='happy';
echo '<br>' ;
echo $$color;

echo '<br>' ;

$a="haya";
$a=&$b;
echo $b;
echo '<br>' ;
$b="elzero";
echo $a;
echo '<br>' ;
echo $b;
echo '<br>' ;
define('DB_NAME','haya');
echo DB_NAME;

echo "This ", "string ", "was ", "made ", "with multiple parameters.";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "$x";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;


$x = 5985;
var_dump($x);


$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo strpos("Hellowwww world!", "world");


echo "<br>";
$y = 585;
var_dump("is_int($y)");
echo "<br>";
$x = 5985;
var_dump(is_int($x));
$e= 59.85;
var_dump(is_int($e));

echo "<br>";
var_dump(is_float($e));
echo "<br>";
echo(rand());

echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[2];
echo cars;


define ('DB_Name','haya');
echo DB_Name;

echo"<br>";

define ('MAX_VALUE','20');
echo MAX_VALUE*4;
define('Max_VALUE',30);
echo MAX_VALUE;


echo"<br>";
define(
    'STUDENT','Rami'
);
function test(){
    echo STUDENT;
}
test();

echo "<br>";
$K=6;
$o=9;



echo"<br>";
$txt1="haya";
$txt2="rami";
$txt1 .= $txt2;
echo $txt1;


echo "<br>";
$array1=array("udr"=>"jnj","nbjh"=>"zxs","jhsb"=>"awa");
$array3=array("jhb"=>"jnj","kjn"=>"bjhgf","jnj"=>"jh");
print_r($array1+$array3);

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");



echo "<br>";
echo PHP_VERSION;
echo PHP_uname();

echo "<br>";
var_dump(100=='100');

echo "<br>";
var_dump(100==100);
echo "<br>";
var_dump(100.0==100);





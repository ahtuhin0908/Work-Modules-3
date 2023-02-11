<?php
$n = 13;
if ($n % 2 == 0){
    echo "$n is an even numbr";

} else{
    echo "$n is a odd number\n";
}

echo " new line-\n";

if ($n > 10){
    echo "$n is greater than 10\n";
}
echo "\n";

$m = 12;
$n = 12;
if ($m != $n){
    echo "M is not equal to N";
}else{
    echo "M is equal to N";
}

echo "\n";
echo "\n";

$alam = 200;
$rahim = 1100;

if ($alam>=$rahim){
    echo "Alam has same or more money then Rahim";
}elseif ($alam>$rahim){
    echo "alam has more money than Rahim";
}elseif ("$alam<$rahim"){
    echo "Alam has less money than Rahim";
}elseif( $alam == $rahim){
    echo "Alam and Rahim has same amount of money";
}

echo "\n";
echo "\n";

$age = 1;

if ($age >= 12 && $age <=19){
    echo "this person is a teenager";
}
else{
    echo "This Person is not a teenager";
}

echo "\n";
echo "\n";

$food1 = "tuna";

if ($food1 == "tuna"){
    echo "It has Vitamin D";
}

echo "\n";
echo "new line on... \n";
echo "\n";


$food = "mangoo";

if ("Tuna" == $food || "salmon" == $food){  //scaler value thakle bam pase rakha better
    echo "{$food} has Vitamin D";
}elseif("apple"==$food){
    echo "Apple doesn`t contain vitamin D";
}else{
    echo "We don`t know if {$food} contains Vitamin D";
}




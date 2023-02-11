<?php
$n = 13;
if ($n % 2 == 0){
    echo "$n is an even number";
}else{ 
    echo "$n is an odd number \n";
}

echo "//new line start---\n";

if ($n > 10){
    echo "$n is Geater than 10\n";
}
echo " //New line start---\n";

$m = 12;
$l = 124;
if ($m != $l){
    echo "M is not equal to L";
}else{
    echo "M is equal to L";
}
echo "\n";

echo " //New line start---\n";

$tuhin = 50;
$momin = 50;

if ($tuhin>$momin){
    echo "Tuhin has more money then Momin";
}elseif ($tuhin == $momin){
    echo "Tuhin & Momin has same amount of money";
}elseif ($tuhin<$momin){
    echo "Tuhin has less money than momin";
}elseif ($tuhin>=$momin){
    echo "Tuhin has same or more money then Momin";
} 
echo "\n";
echo "\n";
echo " //New line start---\n";
echo "\n";

$age = 12;
if($age >= 12 && $age<=19){
    echo "This Person is a Teenager";
}else{
    echo "This Person Is not a Teenager";
}
echo "\n";
echo " //New line start---\n";
echo "\n";


$food = "tuna";

if ($food == "tuna"){
    echo "It has Vitamin D";
}

echo "\n";
echo "new line on... \n";
echo "\n";

// $food = "tuna";

// if ("apple" == $food || "salmon" == $food){
//     echo "it has Vitamin C";
// }elseif ("apple" == $food){
//     echo "Apple dosen`t contain Vitamin C";
// }else{
//     echo "We don`t know if it contains Vitamin C";
// }

$food = "tuna";

if ("tuna" == $food || "salmon" == $food){
    echo "it has Vitamin D";
}elseif ("apple" == $food){
    echo "Apple dosen`t contain Vitamin D";
}else{
    echo "We don`t know if {$food} contains Vitamin D";
}
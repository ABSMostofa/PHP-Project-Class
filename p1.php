<?php

/* $name = 'Bangladesh';

$age = 123;
$question ="How are you?";

$word = "age";

//$myName is camelcase

echo 'Hello '.$name;
echo "\n";
echo "Hello {$name}, {$question}\n";
echo "Hello {$name}, {$question}"; 

define ('PI', 3.14159);

$task ='Read';
echo $task;
echo "\n";
$task ="Write";
echo "$task";
echo "\n";

echo "value of PI = ".PI;
//echo constant ('PI');         


$name ="Earth";
$age =123;
$age = NULL;
$age = '';

$name1 = "Golam";
$name2 = "Mostofa";
var_dump($name1,$name2); */


/*
Interger Int
Double / Float
Boolean 
Null
String
Array
Object
Resource

*/

/* $result =true;
var_dump ($result);

$name ="Earth";
$uname = strtoupper ($name);
echo "We're living on {$uname}\n";
printf ("We're Living on %s", $name);

echo ("\n");

$fname ="Isaac";
$lname ="Newton";
printf("His %s Name is %s %s", "Full", $fname, $lname);


$number = 12;
//$number =$number + 13;
//$number +=13;
$number= (12-5)*5;
echo $number;

//+ - * / % = Arithmetic Operatior */
/*$a =7;
$x = ++ $a;
echo $x, "\n", $a; */
/*
$n =12;
$o =017;
$h =0x2B;

printf("The Number is %d and %d and %d", $n, $o, $h);

printf ("The binary equivalent number of %d is %b \n", 1212, 1212);
printf ("The Hexadecimal equivalent number of %d is %X \n", 1212, 1212);
printf ("The Octal equivalent number of %d is %o \n", 65536, 65536);
*/
/*
for ($i=1; $i<=10; $i++){
    echo $i;
    echo PHP_EOL;
    for ($j=0; $j<$i;$j++){
        echo "*";
    }
}
echo PHP_EOL;
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;
$i=0;
do{
    $i++;
    echo $i.PHP_EOL;

}while($i<10);
*/
/*
$veryold =0;
$old=1;
$new=1;

for($i =0; $i<10; $i++){

    
    echo $veryold. " ";
    $old= $new;
    $new= $veryold + $old;
    $veryold= $old;
     

}

function evenOrOdd($n){
    if ($n %2 == 0){
        return true;
    }
    return false;
}
$x =12;
if (evenOrOdd($x)){
    echo "{$x} is an even number";
} else{
    echo "{$x} is an odd number";
} */
include_once "function.php";

$ft ="Coffee";
$n ="2 Cups";

serve ($ft, $n);
echo 'hello';
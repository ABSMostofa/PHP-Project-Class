<?php
/*
//infinite loop or fixed up looping

function printN($i) {
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
//printN(0);

//recursive function //recursion

function printNumber($counter, $end, $steping=1){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $steping;
    printNumber($counter, $end, $steping);

}
printNumber(21,37,3); */
/*
//Using Recursive Functions printing Fibonaccci Series 

function fibonacci ($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if ($start > $end){
        return;
    }
    $start ++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new =$_temp;

    fibonacci($old, $new, $end);
}
fibonacci(0,1,10); */

/*$name ="Earth"; //global scope

function doSomething (){
   // global $name;  //global variable or
    echo $GLOBALS ['name'];

   // echo $name;
}
doSomething();*/

//function dpSomething(){
  //  $name ="Earth"; //local scope
    //echo $name;
//}

function doSomething(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
function doExtra(){
    static $i;
    $i=$i ??0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();
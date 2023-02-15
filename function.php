<?php
// Recursive function to check whether
// the number is Even or Odd 
/*function check($number){
    if($number == 0)
        return 1;
    else if($number == 1)
        return 0;
    else if($number<0)
        return check(-$number);
    else
        return check($number-2);        
}*/
$student =[
    [
    'name'=> 'Golam Mostofa',
    'age' => 43
],
[  'name' => 'Shohanur Rahman',
    'age' => 32
],

[  'name' => 'Shuvo Rehman',
    'age' => 30
],

[  'name' => 'Abdul Malek',
    'age' => 36
],

];
foreach($student as $student){
    displayStudent($student);

    //echo $student['name']."<br/>".$student ['age']."<br/>"; //"." concatenation
}

function displayStudent($st){
   // echo $st['name']."-".$st['age']."<br/>";
   echo "{$st['name']} - {$st['age']} <br/> "; 
}
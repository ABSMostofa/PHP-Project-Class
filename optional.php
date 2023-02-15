<?php

function visit(){
    static $visit =0;
    $visit++;
    echo $visit;
    echo "<br/>";
 }

visit();
visit();
visit();
visit();
visit();


<?php
$tutiionfee=20000;
$commission =($tutiionfee >=20000)? ("commission 25% =". $tutiionfee*25/100):(
    ($tutiionfee >=7000 && $tutiionfee < 10000)? ("commission 15% =". $tutiionfee*15/100): "Invalid Tution Fee");
    echo "$commission";
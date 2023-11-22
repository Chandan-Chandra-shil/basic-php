<?php

/*
  * Rules for PHP variables :
    1. A variable starts with the $ sign, followed by the name of the variable
    2. A variable name must start with a letter or the underscore character
    3. A variable name cannot start with a number
    4. A variable name can only contain alpha-numeric characters and underscores  (like A-z, 0-9, and _ )
    5. Variable names are case-sensitive ($age and $AGE are two different variables)

    * Remember that PHP variable names are case-sensitive!

    */ 
       $first_name="chandan"; // underscores 
       $middleName="chandra"; // camel case
       $last_name="shil"; // underscores 
      /*  $age= 20; */
       
// echo "My name is $first_name chandra $last_name ";

echo PHP_EOL; // END OFF LINE  that's means line breack

// echo "$age";

    // how to write constant in php

    define("age" ,20);

    echo age;

?>
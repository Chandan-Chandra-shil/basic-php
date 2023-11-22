<?php
// oldest way create a arrays
  // $my_details= array("Chandan Chandra Shil", 20, true, false, "student");

// true value = 1
// false value = 0

  // var_dump($my_details);
  // print_r($my_details)

 /*    $skills=["HTML","CSS","TAILWIND","BOOTSTRAP","JAVASCRIPT","REACT.JS",];
    $skills[6]="mongobd";
    $skills[7]="EXPRESS.JS";
    $skills[8]="NODE.JS";

    print_r($skills) */


 /*  echo $skills[0];
  echo PHP_EOL;
  echo $skills[1];
  echo PHP_EOL;
  echo $skills[2];
  echo PHP_EOL;
  echo $skills[3];
  echo PHP_EOL;
  echo $skills[4];
  echo PHP_EOL;
  echo $skills[5];
  echo PHP_EOL;
  echo $skills[6];
  echo PHP_EOL;
  echo $skills[7];
  echo PHP_EOL;
  echo $skills[8];
  echo PHP_EOL; */

  $my_details= [
    'name'=> 'chandan chandra shil',
    'address'=>'Mymensingh',
    'age'=>20,
    'isProgrammer'=> true,
  ];

  print_r($my_details['address'])


?>
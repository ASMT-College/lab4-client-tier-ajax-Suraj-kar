<?php
$gods=array();
    $gods[]="Suraj";
    $gods[] = "Sudeep";
    $gods[] = "bhuban";
    $gods[] = " Govinda";
    $gods[] = "Sarswati";
    $gods[] = "Balram";
    // print_r($gods)
    $searchString=strtolower($_GET['search']);
// echo $_GET['search'].' searching...';
//  print_r($gods);//echo only prints string




$hint='';
$len = strlen($searchString);
if($len==0){
    '';
    exit(0);
}
foreach ($gods as $god) {
    if ($searchString == strtolower(substr($god, 0, $len))) {
        $hint .= $god.",";
    }
    // if($hint != ''){
    //     break;
    // }
}
echo $hint
    ?>


<?php
    // this is a test comment
    /* $varx = "sanix"; */
    /* $some_bool = true; */

    /* echo "Hello there ".$varx." !\n"; */

    /* function add($a, $b) { */

    /*     if ($some_bool){ */
    /*         $result = $a + $b; */
    /*     } */

    /*     return $result; */
    /* } */

    /* echo add(10, 22); */

$str = "Hello";
$bool = true; // or false
$int = 12;
$float = 12.12;

$arr = array('Hello', 12, $bool, 'there');
var_dump($arr); // to print the whole content

$hash_map = array(
    'x' => 12, 'y' => 33, 'z' => $arr
);
print_r($hash_map);

?>

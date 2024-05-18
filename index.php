<?php
    // this is a test comment
    $varx = "sanix";
    $some_bool = true;

    echo "Hello there ".$varx." !\n";

    function add($a, $b) {

        if ($some_bool){
            $result = $a + $b;
        }

        return $result;
    }

    echo add(10, 22);
?>

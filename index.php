<?php
// constant
define("EXAMPLE_CONSTANT", 12);

// vars
// $str = "Hello";
// $bool = true; // or false
// $int = 12;
// $float = 12.12;
//
// $arr = array('Hello', 12, $bool, 'there');
// var_dump($arr); // to print the whole content
//
// $hash_map = array(
//     'x' => 12, 'y' => 33, 'z' => $arr
// );
// print_r($hash_map);
//
// print_r(EXAMPLE_CONSTANT);

const required = 11;
echo required;

$user="dk";
const pass = "this";
echo "'{$user}' is connected with : `".pass."`";
echo "";
echo "\nSize of pass is : ".strlen(pass)."\n";

const name_r = "Hlllo";

switch (strlen(name_r)) {
    case 5:
        echo "IT's 5";
        break;
    default:
        echo "OUPS !!!";
        break;
}

echo "\n";
$content_radian = 11;
echo ($content_radian > 10) ? "is upper than 10" : "is lower than 10";

//$items = ['this', 10, 'that']; // array('', ...) works too
//
//foreach ($items as $item){
//    echo ">>.item: ".$item."\n";
//}
//
//$i = 0;
//while($i < 5){
//    // do something
//    echo "\ncount - ".$i;
//    $i += 1;
//}

echo "\n";
$i = 10;
do {
    echo "--{$i}\t";
    $i -= 1;
}while($i > 3);

echo "\n";
for ($i = 0; $i < 10; $i+=2){
    echo "+++".$i;
}

// yes typing
function displayName(string $name, int $age): int {
    echo "Hello there !";
    echo "\n{$name} is {$age} year old !";
    return 1;
}

echo "\n";
echo displayName("sanix", 30) == 1 ? "\nooh": NULL;
?>

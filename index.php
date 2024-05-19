<? session_start(); ?>

<h2> HELLO BONGO !!! </h2>
<hr/>
<?php
# this is also a comment
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

// const required = 11;
// echo required;
//
// $user="dk";
// const pass = "this";
// echo "'{$user}' is connected with : `".pass."`";
//
// $amount = 20.23;
// echo "<br/>{$user} owned me \${$amount}<br>";
//
// echo "";
// echo "<br/>Size of pass is : ".strlen(pass)."<br/>";
//
// const name_r = "Hlllo";
//
// switch (strlen(name_r)) {
//     case 5:
//         echo "IT's 5";
//         break;
//     default:
//         echo "OUPS !!!";
//         break;
// }
//
// echo "<br/>";
// $content_radian = 11;
// echo ($content_radian > 10) ? "is upper than 10" : "is lower than 10";
//
// //$items = ['this', 10, 'that']; // array('', ...) works too
// //
// //foreach ($items as $item){
// //    echo ">>.item: ".$item."<br/>";
// //}
// //
// //$i = 0;
// //while($i < 5){
// //    // do something
// //    echo "\ncount - ".$i;
// //    $i += 1;
// //}
//
// echo "<br/>";
// $i = 10;
// do {
//     echo "--{$i}\t"
//     $i -= 1;
// }while($i > 3);
//
// echo "<br/>";
// for ($i = 0; $i < 10; $i+=2){
//     echo "+++".$i;
// }
//
// // yes typing
// function displayName(string $name, int $age): int {
//     echo "Hello there !";
//     echo "<br/>{$name} is {$age} year old !";
//     return 1;
// }
//
// echo "<br/>";
// echo displayName("sanix", 30) == 1 ? "<br/>ooh": NULL;

function print_it($callback, $args){
    $callback($args);
}

// _GET
print_it(
    'print_r', # to pass a callback, it should be defined in params as string.
    array("_GET: " => $_GET),
);
echo "<br>";

if (isset($_GET["ok"])){
    echo "<br>YOU SENT [ok]: ".$_GET["ok"]."<br>";
}

// _POST
print_r(
    array("_POST: " => $_POST)
);
echo "<br>";

// _REQUEST
print_r(
    array("_REQUEST: " => $_REQUEST)
);

echo "<br>";
print_it(
    'print_r',
    array("_SESSION: " => $_SESSION)
);

$arrbb= ["a", "aaa"];
array_push($arrbb, "item", "item 2");
echo "<br>push";
print_r($arrbb);
# and to pop
array_pop($arrbb);
echo "<br>pop";
print_r($arrbb);

array_shift($arrbb);
echo "<br>shift";
print_r($arrbb);

$arrbb = array_reverse($arrbb);
echo "<br>reverse";
print_r($arrbb);

echo "<br>loop hashmap";
$hash_map = array(
    'x' => 12, 'y' => "DOUM", 'z' => false
);
foreach ($hash_map as $key => $value){
    echo "<br>".$key." ---> ".$value;
}
?>

<hr/>
<form action="/" method="post" >
    <input type="text" name="name" />
    <input type="number" name="age" />
    <button type="submit">BOUM</button>
</form>

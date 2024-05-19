## PHP LEARN

Yeah... each statement need to end with a comma ";".... BOOOOO.

## DATA TYPES

```php
<?
// constants
define("EXAMPLE_CONSTANT", 12);

// Variables and data types :

$str = "Hello";
$bool = true; // or false
$int = 12;
$float = 12.12;

$is_empty = NULL;

$arr = array('Hello', 12, 'there', false);
# to add values to the array (
    - array_push($arr, "item", "item 2"); to add new items
    - array_pop($arr); to remove the last added item
    - array_shift($arr); to remove the first item in the array
    - $arr = array_reverse($arr); to shift values
    - count($arr) to count values inside the array
)
var_dump($arr); //to print the whole content

$hash_map = array(
    'x' => 12, 'y' => 33, 'z' => $arr
);
var_dump($hash_map); // we can also use print_r, it's same but less infos.
// to loop inside an hasmap (assotiative array);
foreach ($hash_map as $key => $value){
    echo $key." ---> ".$value
}
// get keys
array_keys($hash_map);
// get values
array_values($hash_map);
// we can flip keys and values too:
$new_flipped_hashmap_arr = array_flip($hash_map);
?>
```

## CONDITIONS

- if / else:

```php
<?
if ($user == "this" AND $pass == "xxx") { // AND (&&) | OR (||)
    echo "this";
 }else{
    echo "that";
}
```

- switch /case:

```php
<?
const name_r = "Hlllo";
switch (strlen(name_r)) {
    case 5:
        echo "IT's 5";
        break;
    default:
        echo "OUPS !!!";
        break;
}
```

- ternary:

```php
<?
echo ($content_radian > 10) ? "is upper than 10" : "is lower than 10";
```

## SESSION VARIABLES

Global Session variables :

- `$_GET`: all query params.
- `$_POST`: all POST form params.
- `$_REQUEST`: both.
- `$_SESSION`: session params but needed a `session_start` to be initiated.
- `$_COOKIES`: cookies values.
- `$_SERVER`: entries created by the webserver.


## LOOP

- foreach
```php
<?
$items = ['this', 10, 'that']; // array('', ...) works too

foreach ($items as $item){
    echo $item;
}
```
- while

```php
<?
$i = 0;
while($i < 10){
    // do something
    echo "count - ".$i;
    $i += 1;
}
```

- do/while (execute first before checking the condition).
```php
<?
$i = 0;
do {
    echo "--{$i}";
    $i -= 1;
}while($i > 3);
```

- for
```php
<?
for ($i = 0; $i < 10 &i ++;){
    echo $i;
}
```
## BUILTIN FN

```php
<?
rand(1, 100); # for random value in that range
# The list below is pretty obvious i guess...

abs(12.3);
floor(12.3);
ceil(12.3);
round(12.3);
sqrt(9);
pow(3, 4);

max(23, 4, 1, 55);
min(23, 4, 1, 55);

pi(23, 4, 1, 55);

# more practical
isset() // true if var declared and not null
empty() // true if not declared or false or null or ""


// We can filter input _POST to prevent XSS injections
// the big advantages for this is to not have to use isset()
//  each times
$name = filter_input(
    INPUT_POST, # this is know by php itself
    "name",
    FILTER_SANITIZE_SPECIAL_CHARS # this too...(there is multiple tyhpe of FILTER_... mode)
);
echo $name;
```

## FORMATING

```php
<?
user="dk";
echo "{$user} is connected !";

$amount = 20.23;
// we can also escape characters.
echo "{$user} owned me \${$amount}";
```

## EXTRAS

```php
<?
// to include a page to another one
include("this.php");

# or // can be used to define comments

# size of a string var
strlen($var); // to get size of a string
strtolower($var); // to lower string
strtoupper($var); // to upper string
trim($var); // to remove spaces surounding string
// to add a padding of characters after the string
str_pad($var, 10, "-"); // to lower string
str_replace("o", "a", "Hello Warld!");
strrev($var); // to reverse the string
str_shuffle($var); // to shuffle characters in strings
strcmp($var1, $var2); // to compare two strings

strpos($var, "a"); // to the theindex of the first occurence of "a" in $var.
substr($var, 10); // string substract
substr($var, 2, 10); // string substract with a start/end indexes

explode(" ", "a b c"); // like a split and return an array.
implode("-", array("a", "b")); // like a join

# pass a callback to a method (with default params)
function print_it($callback, $args=array()){
    $callback($args);
}
print_it(
    'print_r', # to pass a callback, it should be defined in params as string.
    array("_GET: " => $_GET),
);

# to deal with checkboxes in php, we need to set the same var that will
# be identify as an array in the backend side.
?>
<form action="index.php" method="post">
    <input type="checkbox" name="foods[]" />
    <input type="checkbox" name="foods[]" />
    <input type="checkbox" name="foods[]" />
    <input type="checkbox" name="foods[]" />
</form>
<!-- in the php side -->
<?
$foods = $_POST["foods"];
# then loop on it
foreach ($foods as $food){
    echo ">>".$food;
}

// cookies
setcookie("key", "value", time() + (100), "/path");
setcookie("this", "that", time() + 100, "/path/to");
// those are stored in $_COOKIES;
// as assotciative array.

// session
// same principle for $_SESSION["values"]
```

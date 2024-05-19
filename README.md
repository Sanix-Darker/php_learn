## PHP LEARN

Yeah... each statement need to end with a comma ";".... BOOOOO.

## DATA TYPES

```php
// constants
define("EXAMPLE_CONSTANT", 12);

// Variables and data types :

$str = "Hello";
$bool = true; // or false
$int = 12;
$float = 12.12;

$is_empty = NULL;

$arr = array('Hello', 12, 'there', false);
var_dump($arr); //to print the whole content

$hash_map = array(
    'x' => 12, 'y' => 33, 'z' => $arr
);
var_dump($hash_map); // we can also use print_r, it's same but less infos.
```

## CONDITIONS

- if / else:

```php
if ($user == "this" AND $pass == "xxx") { // AND (&&) | OR (||)
    echo "this";
 }else{
    echo "that";
}
```

- switch /case:

```php
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
echo ($content_radian > 10) ? "is upper than 10" : "is lower than 10";
```

## SESSION VARIABLES

Session variables :

- `$_GET`: all query params.
- `$_POST`: all POST form params.
- `$_REQUEST`: both.
- `$_SESSION`: session params but needed a `session_start` to be initiated.

## LOOP

- foreach
```php
$items = ['this', 10, 'that']; // array('', ...) works too

foreach ($items as $item){
    echo $item;
}
```
- while

```php
$i = 0;
while($i < 10){
    // do something
    echo "count - ".$i;
    $i += 1;
}
```

- do/while (execute first before checking the condition).
```php
$i = 0;
do {
    echo "--{$i}";
    $i -= 1;
}while($i > 3);
```

- for
```php
for ($i = 0; $i < 10 &i ++;){
    echo $i;
}
```
## BUILTIN FN

```php
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

```

## FORMATING

```php
user="dk";
echo "{$user} is connected !";

$amount = 20.23;
// we can also escape characters.
echo "{$user} owned me \${$amount}";
```

## EXTRAS

```php
# or // can be used to define comments

# size of a string var
strlen(var); // to get size of a string

# pass a callback to a method (with default params)
function print_it($callback, $args=array()){
    $callback($args);
}
print_it(
    'print_r', # to pass a callback, it should be defined in params as string.
    array("_GET: " => $_GET),
);
```

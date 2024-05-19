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

## FORMATING

```php
user="dk";
echo "${user} is connected !";
```

## EXTRAS

```php
strlen(var); // to get size of a string
```

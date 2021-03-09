# PHP Array 

An array stores multiple values in one single variable

**Create php array**

```
<?php
$cars = array("Volvo", "BMW", "Toyota");
```

Or, 

```
$cars = ["Volvo", "BMW", "Toyota"];
```

**Access array elements**

```
echo $cars[0];
echo $cars[1];
echo $cars[2];
```

**Array types**

- Indexed array
- Associative array
- Multi dimensional array

**Get the length of an array** using `count()` function we can get the length of an array

```
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
```


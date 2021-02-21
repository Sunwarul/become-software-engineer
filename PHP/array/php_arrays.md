# PHP Array

**Initialize an array**

```
$array_name = [];
$array_name = array();
$spl_array = SplFixedArray(10);
```

**Types of php array**

- Numerical
- Associative
- Multi-dimensional



**Examples**

- Numerical array

  ```
  <?php
  
  $my_array = [];
  
  $my_array[2] = 'two';
  $my_array[500] = 'Five';
  $my_array[5] = 'Five';
  $my_array[] = 'Other';
  $my_array[] = 'Other';
  $my_array[] = 'Other';
  $my_array[] = 'Other';
  
  print_r($my_array);
  
  /* 
  Array
  (
      [2] => two
      [500] => Five
      [5] => Five
      [501] => Other
      [502] => Other
      [503] => Other
      [504] => Other
  ) 
  */
  ```

  

- Associative array

  ```
  <?php
  
  $student = [];
  $student['id'] = 1;
  $student['name'] = 'John Doe';
  $student['address'] = 'Dhaka, Bangladesh';
  
  
  print_r($student);
  
  /* 
  Array
  (
      [id] => 1
      [name] => John Doe
      [address] => Dhaka, Bangladesh
  )
  */
  ```

- Multi Dimensional Array

  ```
  <?php
  
  $players = [];
  
  $players[] = ['name' => 'Messi', 'team' => "FCB"];
  $players[] = ['name' => 'Ronaldo', 'team' => "Juventas"];
  $players[] = ['name' => 'Neymar', 'team' => "PSG"]; // <-- Inserting arrays into array not values. 
  
  
  foreach ($players as $index => $player) {
      echo "Info of player #{$index}:" . PHP_EOL;
      echo "Player Name: {$player['name']}\nTeam He Play for: {$player['team']}" . PHP_EOL;
      echo "------------------------" . PHP_EOL;
  }
  
  ```

  
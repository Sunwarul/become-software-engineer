# Structs

A struct is a complex data type where we define multiple properties as a group so that we can use it as a single data type.

*Example:*

```php
// Struct using php array
$ronaldo = [ 
    "name" =>"Ronaldo", 
    "country" =>"Portugal", 
    "age" =>31, 
    "currentTeam" =>"Real Madrid" 
]; 
 
$messi = [ 
    "name" =>"Messi", 
    "country" =>"Argentina", 
    "age" =>27, 
    "currentTeam" =>"Barcelona" 
];
$team = [ 
    "player1" =>$ronaldo, 
    "player2" =>$messi 
];
```

```php
// Struct using php class
class Player {  
    public $name; 
    public $country; 
    public $age; 
    public $currentTeam;  
} 
 
$ronaldo = new Player; 
$ronaldo->name = "Ronaldo"; 
$ronaldo->country = "Portugal"; 
$ronaldo->age = 31; 
$ronaldo->currentTeam = "Real Madrid";
```


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

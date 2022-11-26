<?php 

    $raw = file_get_contents('other.json');
    $arr = json_decode($raw); 

    function printHTML($arr) {
        foreach($arr as $item) {
            echo '<ul>';
            echo '<li>'. $item->name .'</li>';
            if(is_array($item->subgroups) && count($item->subgroups) > 0) {
                printHTML($item->subgroups);
            }
            echo '</ul>';
        }
    }

    foreach($arr as $item) {
        echo '<ul>';
        echo '<li>' . $item->name . '</li>';
        if(is_array($item->subgroups) && count($item->subgroups) > 0) {
            printHTML($item->subgroups);
        }
        echo '</ul>';
    }
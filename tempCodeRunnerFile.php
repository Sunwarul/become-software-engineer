<?php
$arr = explode('/', $item);
                            $temp = $item . '/' . ucfirst($arr[count($arr) - 2]);
                            $filename =  $temp . '.md';
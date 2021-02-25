<?php

/**
 * This script will delete a file template from each directory and subdirectories
 * Please run this carefully
 * @author Sunwarul Islam <sunwarul.dev@gmail.com>
 * @version 1.0.0
 */

error_reporting(0);
echo "Delete the file in each directory:\n";
$fileName = trim(fgets(STDIN));

$dirs = scandir(__DIR__);
foreach ($dirs as $dir) {
    if (is_dir($dir) && !in_array($dir, ['.', '..', 'node_modules', 'vendor'])) {
        $it = new RecursiveDirectoryIterator($dir);
        foreach (new RecursiveIteratorIterator($it) as $item) {
            if (is_dir($item)) {
                unlink("{$item}/{$fileName}");
            }
        }
    }
}

// system("touch {$dir}/.gitignore && echo \"*\n!gitignore\" > {$dir}/.gitignore");
// system("touch {$file}/file.txt && echo \"*\n!gitignore\" > {$file}/.gitignore");
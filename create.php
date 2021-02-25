<?php

/**
 * This script will create a file template in each directory and subdirectories
 * Enter a filename with extension and put some content into it.
 * To quit from content editing mode to next, hit q or insert the word quit/exit
 * @author Sunwarul Islam <sunwarul.dev@gmail.com>
 * @version 1.0.0
 */
echo "File name\n";
$fileName = trim(fgets(STDIN));

echo "Content in files (Quit with  `quit` or `exit` or `q`)\n";

$tempText = "";
while (1) {
    $line = fgets(STDIN);
    if (strcmp($line, "quit") === 1 || strcmp($line, "exit") === 1 || strcmp($line, "q") === 1) {
        echo "Taken your input\n";
        break;
    }
    $tempText .= $line;
}

$dirs = scandir(__DIR__);
foreach ($dirs as $dir) {
    if (is_dir($dir) && !in_array($dir, ['.', '..', 'node_modules', 'vendor'])) {
        $it = new RecursiveDirectoryIterator($dir);
        foreach (new RecursiveIteratorIterator($it) as $item) {
            if (is_dir($item)) {
                $file = fopen("{$item}/{$fileName}", "w");
                fwrite($file, $tempText);
                fclose($file);
                // unlink("{$item}/.gitignore");
            }
        }
    }
}

// system("touch {$dir}/.gitignore && echo \"*\n!gitignore\" > {$dir}/.gitignore");
// system("touch {$file}/file.txt && echo \"*\n!gitignore\" > {$file}/.gitignore");
<?php

/**
 * This script will create/remove files in each directory and subdirectories
 * recursively. Enter a filename with extension and create/remove that file
 * Select what type of operation you need form command line 
 * @author Sunwarul Islam <sunwarul.dev@gmail.com>
 * @version v1.0.1
 */

echo <<<EOT
=================================\n
*******    PREFERENCES    *******
=================================\n
    1: File as directory name
    2: Raw file in each directory
    3: Delete from each directory
    4: Delete as directory name
=================================\n
EOT;

$preference = trim(fgets(STDIN));
if ($preference == 1) {
    fileAsDirectoryName();
} else if ($preference == 2) {
    rawFileInEachDirectory();
} else if ($preference == 3) {
    deleteFromEachDirectory();
} else if ($preference == 4) {
    deleteFileAsDirectoryName();
}

function fileAsDirectoryName()
{
    $dirs = scandir(__DIR__);
    foreach ($dirs as $dir) {
        if (is_dir($dir) && !in_array($dir, ['.', '..', 'node_modules', 'vendor', '.git'])) {
            $reit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),  RecursiveIteratorIterator::CHILD_FIRST);
            foreach ($reit as $item) {
                if ($item->isDir()) {
                    if (!in_array($item->getFilename(), ['..'])) {
                        if (str_ends_with($item, '/.')) {
                            $arr = explode('/', $item);
                            $filename = $item . '/' . $arr[count($arr) - 2] . '.md';
                            touch($filename);
                        } else {
                            // echo $item  . PHP_EOL;
                            // touch($item . '.md');
                        }
                    }
                }
            }
        }
    }
}

function deleteFileAsDirectoryName()
{
    $dirs = scandir(__DIR__);
    foreach ($dirs as $dir) {
        if (is_dir($dir) && !in_array($dir, ['.', '..', 'node_modules', 'vendor', '.git'])) {
            $reit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),  RecursiveIteratorIterator::CHILD_FIRST);
            foreach ($reit as $item) {
                if ($item->isDir()) {
                    if (!in_array($item->getFilename(), ['..'])) {
                        if (str_ends_with($item, '/.')) {
                            $arr = explode('/', $item);
                            $filename = $item . '/' . $arr[count($arr) - 2] . '.md';
                            unlink($filename);
                        } else {
                            // echo $item  . PHP_EOL;
                            // touch($item . '.md');
                        }
                    }
                }
            }
        }
    }
}


function rawFileInEachDirectory()
{
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
        if (is_dir($dir) && !in_array($dir, ['.', '..', 'node_modules', 'vendor', '.git'])) {
            $reit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),  RecursiveIteratorIterator::CHILD_FIRST);
            foreach ($reit as $item) {
                if ($item->isDir()) {
                    if (!in_array($item->getFilename(), ['..'])) {
                        $stream = fopen($item . "/{$fileName}", "w+");
                        fwrite(
                            $stream,
                            $tempText
                        );
                        fclose($stream);
                    }
                }
            }
        }
    }
}

function deleteFromEachDirectory()
{
    echo "File name\n";
    $fileName = trim(fgets(STDIN));

    $dirs = scandir(__DIR__);
    foreach ($dirs as $dir) {
        if (is_dir($dir) && !in_array($dir, ['.', '..', 'node_modules', 'vendor', '.git'])) {
            $reit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),  RecursiveIteratorIterator::CHILD_FIRST);
            foreach ($reit as $item) {
                if ($item->isDir()) {
                    if (!in_array($item->getFilename(), ['..'])) {
                        unlink("{$item}/{$fileName}");
                    }
                }
            }
        }
    }
}

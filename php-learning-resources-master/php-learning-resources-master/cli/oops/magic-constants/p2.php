<?php
// WAP in PHP to show __FILE__ (magic constants) and __DIR__.
echo "The file system path = ".__FILE__;
echo "\n";
echo "The folder path = ".__DIR__;
echo "\n";
echo "The folder path = ".dirname(__DIR__);
echo "\n";
echo "The folder path = ".dirname(dirname(__DIR__));
echo "\n";
echo "The folder path = ".dirname(dirname(dirname(__DIR__)));
echo "\n";
$path = dirname(dirname(dirname(__DIR__)));
echo $path;
?>
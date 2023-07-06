<?php
require __DIR__.'/vendor/autoload.php';
$table = new LucidFrame\Console\ConsoleTable();

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Language')
    ->addHeader('Year')
    ->addRow()
        ->addColumn('PHP')
        ->addColumn(1994)
    ->addRow()
        ->addColumn('C++')
        ->addColumn(1983)
    ->addRow()
        ->addColumn('C')
        ->addColumn(1970)
    ->display();
?>
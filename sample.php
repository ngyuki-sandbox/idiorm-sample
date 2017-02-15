<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

$row = ORM::for_table('t')->where('id', 1)->find_one();
var_dump($row->as_array());

$rows = ORM::for_table('t')->where_in('name', ['ore', 'are'])->find_result_set();
foreach ($rows as $row) {
    var_dump($row->as_array());
}

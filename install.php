<?php

global $database;
$table = 'disqus';
$columns = array(
    'id' => array('type' => 'int(1)', 'special' => 'primary'),
    'username' => array('type' => 'varchar(45)', 'special' => 'NOT NULL')
  );

$values = array(
  array('username' => 'brisklimbs')
);

$database->createTable($table, $columns);
$database->insertMulti($table, $values);
<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2018/01/22 09:08:54

$database = new sfPropelDatabase();
$database->initialize(array (
  'dsn' => 'mysql://root@localhost/faskel_symfony',
), 'propel');
$this->databases['propel'] = $database;
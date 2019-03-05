<?php

$config = yaml_parse_file(__DIR__ . '/config.yaml');

$dsn = 'mysql:dbname='.$config['mysql']['db'].';host='.$config['mysql']['host'];
$user = $config['mysql']['user'];
$password = $config['mysql']['password'];

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
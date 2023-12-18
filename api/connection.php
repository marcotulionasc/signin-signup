<?php
function getDbConfig() {
    return [
        'host' => $_ENV["DB_HOST"],
        'user' => $_ENV["DB_USER"],
        'password' => $_ENV["DB_PASSWORD"],
        'name' => $_ENV["DB_NAME"],
        'port' => $_ENV["DB_PORT"],
    ];
}

function createDbConnection($config) {
    $db = new mysqli($config['host'], $config['user'], $config['password'], $config['name'], $config['port']);

    if ($db->connect_error) {
        die("Erro na conexão com o banco de dados: " . $db->connect_error);
    }

    return $db;
}

$config = getDbConfig();
$db = createDbConnection($config);
?>
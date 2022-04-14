<?php 
session_start();
session_regenerate_id();

/* URL da aplicação */
DEFINE('BASE_URL', 'http://localhost/phoenix/');

/* Diretório raiz da aplicação */
DEFINE('PATH',$_SERVER['DOCUMENT_ROOT'].'/phoenix');

/* CSRF TOKEN */
DEFINE('CSRF_TOKEN',TRUE);

/* Conexão com banco de dados MYSQL */
DEFINE('DATA_LAYER_CONFIG', [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "phoenix",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
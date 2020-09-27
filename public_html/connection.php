<?php
//$CONFIG_MYSQL_DATABASE = getenv('CONFIG_MYSQL_DATABASE');
//$CONFIG_MYSQL_USER = getenv('CONFIG_MYSQL_USER');
//$CONFIG_MYSQL_PASSWORD = getenv('CONFIG_MYSQL_PASSWORD');
//$CONFIG_MYSQL_HOST = getenv('CONFIG_MYSQL_HOST');
//$CONFIG_MYSQL_PORT = getenv('CONFIG_MYSQL_PORT');
//$CONFIG_BACKEND_HOST = getenv('CONFIG_BACKEND_HOST');
//$conn = new mysqli($CONFIG_MYSQL_HOST, $CONFIG_MYSQL_USER, $CONFIG_MYSQL_PASSWORD, $CONFIG_MYSQL_DATABASE, $CONFIG_MYSQL_PORT);

$conn = new mysqli('localhost', 'root', '', 'my_database');

if(!$conn){
    echo "ERROR in connection : ".mysqli_error($conn);
}

?>

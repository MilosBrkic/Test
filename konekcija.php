<?php

$mysql_server = getenv('DB_HOST');//"ec2-54-247-94-127.eu-west-1.compute.amazonaws.com";
$mysql_user = getenv('DB_USER');//"rhabgrdmqbmktd";
$mysql_pass = getenv('DB_PASS');//"45ce463f833fa692c92c999d76e3fa90d6ede3341d92797e5f718656bddcf249";
$mysql_db = getenv('DB_Name');//"dfpi1aenr4h0j7";

echo $mysql_server;
echo $mysql_user;
echo $mysql_pass;
echo $mysql_db;

$baza = pg_connect("host=$mysql_server port=5432 dbname=$mysql_db user=$mysql_user password=$mysql_pass");
$conn = new PDO("pgsql:host=$mysql_server port=5432 dbname=$mysql_db user=$mysql_user password=$mysql_pass");
//$baza = new mysqli($mysql_server,$mysql_user,$mysql_pass,$mysql_db);
//$baza->set_charset("utf8"); 

$sql = "CREATE TABLE TestTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";


$conn->exec($sql);

/*if ($baza->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $baza->error;
}*/

$baza->close();

?>
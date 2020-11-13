<?php

$mysql_server = "ec2-54-247-94-127.eu-west-1.compute.amazonaws.com";
$mysql_user = "rhabgrdmqbmktd";
$mysql_pass = "45ce463f833fa692c92c999d76e3fa90d6ede3341d92797e5f718656bddcf249";
$mysql_db = "dfpi1aenr4h0j7";

$baza = new mysqli($mysql_server,$mysql_user,$mysql_pass,$mysql_db);
$baza->set_charset("utf8"); 

$sql = "CREATE TABLE TestTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($baza->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $baza->error;
}

$baza->close();

?>
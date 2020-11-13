<?php

$mysql_server = getenv('DB_HOST');//"ec2-54-247-94-127.eu-west-1.compute.amazonaws.com";
$mysql_user = getenv('DB_USER');//"rhabgrdmqbmktd";
$mysql_pass = getenv('DB_PASS');//"45ce463f833fa692c92c999d76e3fa90d6ede3341d92797e5f718656bddcf249";
$mysql_db = getenv('DB_NAME');//"dfpi1aenr4h0j7";

echo $mysql_server;
echo "\n<br>";
echo $mysql_user;
echo "\n<br>";
echo $mysql_pass;
echo "\n<br>";
echo $mysql_db;

//$baza = pg_connect("host=$mysql_server port=5432 dbname=$mysql_db user=$mysql_user password=$mysql_pass");

//$baza = new mysqli($mysql_server,$mysql_user,$mysql_pass,$mysql_db);
//$baza->set_charset("utf8"); 

try{
  // creates the PostgreSQL database connection
  $conn = new PDO("pgsql:host=$mysql_server port=5432 dbname=$mysql_db user=$mysql_user password=$mysql_pass");
  
  // message if connected to the PostgreSQL successfully
  if($conn){
  echo "\nConnected to the database successfully!";


  $sql = "CREATE TABLE IF NOT EXISTS sampleTable (
    id serial PRIMARY KEY,
    sampleField character varying(20) NOT NULL UNIQUE
    )";
  
  
  $conn->exec($sql);



  }
  }catch (PDOException $e){
  // should there be an error lets get that and show it to the user.
  echo $e->getMessage();
  }





/*if ($baza->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $baza->error;
}*/

//$baza->close();

?>
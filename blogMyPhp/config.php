<!DOCTYPE html>
<!DOCTYPE html>

<?php
$dbHost ="localhost";
$dbName ="blogDataBase";
$dbuser ="userBLog";
$dbpass ="userBLog-2017";


try{
  // PDO PHP Data Objects
  // $pdo = new PDO('mysql:host=localhost;dbname=database', 'user', 'password'); 
  $pdo = new PDO("mysql:host=$dbHost;dbname:$dbName", $dbuser, $dbpass);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}catch( Exception $ex){
	echo $ex->getMessage();
	// Put logs and notified addmin.
}

?>
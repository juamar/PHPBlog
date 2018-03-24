
<?php
/**
 * PHP PDO_sqlite
 * insert statements with PDO_sqlite
 */

//Obrir una database en memoria
//$db = new PDO('sqlite::memory:');


echo " <br /> drivers <br />";
var_dump(PDO::getAvailableDrivers());


// Open una database en disk
$db = new PDO('sqlite:./blog.db');


// Persintencia en la mateixa sessio, pero no entre usuaris
// $db = new PDO("sqlite::memory:", null,null,array(PDO::ATTR_PERSISTENT=>true));


//Creació d'una taula bàsica "users" 
// ->exec només executa la sentencia (statement)
$db->exec('CREATE TABLE posts (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, content TEXT)');
echo "Table posts ha estat creada<br />";



 // ¿Print  $result amb un foreach?
 //.....

//drop the table
//$db->exec('DROP TABLE users');
?>

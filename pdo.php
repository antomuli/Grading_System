<html>
<head>
<?php
// Location to file
$db = 'C:\wamp64\www\Grading_System\Database\GradingOnline.mdb';
if(!file_exists($db)){
 die('Error finding access database');
}
// Connection to ms access
$conn = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=".$db.";Uid=; Pwd=;");


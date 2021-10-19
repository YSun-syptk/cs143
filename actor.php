<html>
<head><title>CS143 MySQL-Apache Container</title></head>
<body>
<h1>Welcome, please specify an actor id:</h1>
<form method="get" action="actor.php">
    <input name="id">
<p>
<?php
$id = $_GET["id];
$db = new mysqli('localhost', 'cs143', '', 'class_db');
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
/* Query: Get actor with specified ID */
$query = $db->prepare("SELECT * FROM Actor WHERE id == ?");
$qry->bind_param('i', $id); #i means integer type
$qry->execute();
$qry->bind_result($id, $last, $first, $sex, $dob, $dod)
/* Basic Error handling */
if (!$qry) {
    $errmsg = $db->error; 
    print "Query failed: $errmsg <br>"; 
    exit(1); 
}
while ($qry->fetch()){
	echo ;
}
$qry->close();
$db->close();
?>
</p>
</body>
</html>

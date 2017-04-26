<html>
 
<h1>Data User</h1>    
<table style='border: solid 1px black;'>
<tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Email</th>
</tr>
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demouisi";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, nama, alamat, email FROM user";
    $stmt = $conn->query($sql);
    $row = $stmt->fetchAll();

    foreach ($row as $res){
        echo "<tr><td>{$res['id']}</td><td>{$res['nama']}</td><td>{$res['alamat']}</td><td>{$res['email']}</td></tr>";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

</table>
</html>
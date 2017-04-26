<html>
    <head></head>
    <body>
        <?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webdasar";
        if (isset($_GET['nama'])) {
            $id =  $_GET['id'];
            $nama =  $_GET['nama'];
            $alamat =  $_GET['alamat'];
            $email =  $_GET['email'];
			
			try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO user (id, nama, alamat, email)
			VALUES ('$id','$nama', '$alamat', '$email')";
			// use exec() because no results are returned
			$conn->exec($sql);
			echo "New record created successfully";
			}
		catch(PDOException $e)
			{
			echo $sql . "<br>" . $e->getMessage();
			}
			
        }
        ?>
        <form>
			<table>
				<label>
					<tr>
						<td>Id</td>
						<td><input name="id" placeholder="id"></td>
					</tr>
				</label>
				<label>
					<tr>
						<td>Nama</td>
						<td><input name="nama" placeholder="nama"></td>
					</tr>
				</label>
				<label>
					<tr>
						<td>Alamat</td>
						<td><input name="alamat" placeholder="alamat"></td>
					</tr>
				</label>
            
				<label>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" placeholder="email"></td>
					</tr>
				</label>			
				<label>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="password"></td>
					</tr>
				</label>			
				<label>
					<tr>
						<td>No Telp</td>					
						<td><input type="number" name="no_telp" placeholder="No Telp"></td>
					</tr>
				</label>
					<tr>
						<td><button type="submit">Klik</button></td>					
					</tr>
            
        </form>
    </body>
</html>

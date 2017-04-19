<?php
if (isset($_POST['submit'])) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Penggunaan Tag Tabel</title>
    </head>
    <body>
        <h1>Belajar Tag Tabel</h1>
        <form method="post">
            <table border="1">
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input id="nama" name="nama"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input id="alamat" name="alamat"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input id="password" name="password" type="password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button type="submit" name="submit" value="1">Simpan</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

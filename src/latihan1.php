<html>
    <head></head>
    <body>
        <?php
        if (isset($_GET['nama'])) {
            echo "Nama : " . $_GET['nama'];
        }
        ?>
        <form>

            <label>Nama
                <input name="nama" placeholder="nama">
            </label>
            <br>
            <label>Alamat
                <input name="alamat" placeholder="alamat">
            </label>
            <br>
            <label>Email
                <input type="email" name="email" placeholder="email">
            </label>
            <label>Password
                <input type="password" name="password" placeholder="password">
            </label>
            <label>No Telp
                <input type="number" name="no_telp" placeholder="No Telp">
            </label>

            <button type="submit">Klik</button>
        </form>
    </body>
</html>
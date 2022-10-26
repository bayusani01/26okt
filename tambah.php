<html>
    <head></head>
    <body>
        <h1>bantuan blt</h1>
        <form action="proses_tambah.php" method="POST">

<fieldset>

<p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" />
        </p>
        <p>
           <label for = "jenis_bantuan">jenis bantuan : </label>
           <label><input type="radio" name="jenis_bantuan" value ="tunai"/>tunai</label>
           <label><input type="radio" name="jenis_bantuan" value ="nontunai"/>no-tunai</label>
           <label><input type="radio" name="jenis_bantuan" value ="beras"/>beras</label>
           <label><input type="radio" name="jenis_bantuan" value ="minyak"/>minyak</label>
           <label><input type="radio" name="jenis_bantuan" value ="gula"/>gula</label>
        </p>
        
        <p>
            <input type="submit" value="kirim-data" name="tambah" />
        </p>

        </fieldset>

    </form>
    </body>
</html>
<html>
    <head>
        <title>formulir</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>id formulir</td><td><input type="text" onkeyup="isi_otomatis()" name="idformulir"></td></tr>
                <tr><td>no ruangan</td><td><input type="text" name="noRuangan"></td></tr>
                <tr><td>idUser</td><td><input type="text" name="idUser"></td></tr>
                <tr><td>nama acara</td><td><input type="text" name="nmAcara"></td></tr>
                <tr><td>waktu</td><td><input type="datetime-local" name="waktu"></td></tr>
                <tr><td>prodi</td><td><input type="text" name="prodi"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
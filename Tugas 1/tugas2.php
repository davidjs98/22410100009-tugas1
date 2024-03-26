<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forum input</title>
</head>
<body>
    <form action="tugas1.php" method="post">
        <label for="kode">kode:</label><br>
        <input type="text" id="kode" name="kode"><br>
        <label for="nama">nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="satuan">satuan:</label><br>
        <input type="text" id="satuan" name="satuan"><br>
        <label for="beli">beli:</label><br>
        <input type="number" id="beli" name="beli"><br>
        <label for="jual">jual:</label><br>
        <input type="number" id="jual" name="jual"><br><br>
        <input type="submit" value="Save" name="save">
        <input type="submit" value="Cancel" name="cancel">
    </form>
</body>
</html>
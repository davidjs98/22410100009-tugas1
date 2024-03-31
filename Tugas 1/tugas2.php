<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mycss.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>forum input</title>
</head>
<body>
    <div class="Rounded">
        <form action="tugas1.php" method="post">
            <label for="kode" class="lbl">kode:</label><br>
            <input type="text" class="ipt" id="kode" name="kode"><br>
            <label for="nama" class="lbl">nama:</label><br>
            <input type="text" class="ipt" id="nama" name="nama"><br>
            <label for="satuan" class="lbl">satuan:</label><br>
            <input type="text" class="ipt" id="satuan" name="satuan"><br>
            <label for="beli" class="lbl">beli:</label><br>
            <input type="number" class="ipt" id="beli" name="beli"><br>
            <label for="jual" class="lbl">jual:</label><br>
            <input type="number" class="ipt" id="jual" name="jual"><br><br>
            <button class="btn"><i class="fa fa-save"></i> save</button>
            <button class="btn"><i class="fa fa-close"></i> cancel</button>
        </form>
    </div>  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mycss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table barang</title>
</head>
<body>
    <p><a href="tugas2.php" target="_self"><button class="btn"><i class="fa fa-plus"></i> tambah</button></a></p>
    <table>
        <tr>
            <th rowspan="2">kode</th>
            <th rowspan="2">nama</th>
            <th rowspan="2">satuan</th>
            <th colspan= "2">harga</th>
            <th rowspan="2">action</th>
        </tr>
        <tr>
            <th>beli</th>
            <th>jual</th>
        </tr>
        <tr>
            <td>M01</td>
            <td>Cpu</td>
            <td>pcs</td>
            <td>200</td>
            <td>350</td>
            <td><a href="tugas3.php" target="_self"> <button class="btn"><i class="fa fa-edit"></i> edit</button></a></td>
        </tr>
        <tr>
            <td>M02</td>
            <td>Ram</td>
            <td>pcs</td>
            <td>300</td>
            <td>450</td>
            <td><a href="tugas3.php" target="_self"> <button class="btn"><i class="fa fa-edit"></i> edit</button></a></td>
        </tr>
        <tr>
            <td>M03</td>
            <td>Vga</td>
            <td>pcs</td>
            <td>400</td>
            <td>550</td>
            <td><a href="tugas3.php" target="_self"> <button class="btn"><i class="fa fa-edit"></i> edit</button></a></td>
        </tr>
    </table>
</body>
</html>

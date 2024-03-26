<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid purple;
            border-collapse: collapse;
        }
        td{
            
            padding: 10px;
        }
        th {
            background-color: #ffff00;
            text-align: center;
            padding: 10px;
        }
    </style>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table barang</title>
</head>
<body>
    <p><a href="tugas2.php" target="_self">Visit Tugas 2</a></p>
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
            <td><a href="tugas3.php" target="_self"> <input type="button" name="edit" value="edit"></a></td>
        </tr>
        <tr>
            <td>M02</td>
            <td>Ram</td>
            <td>pcs</td>
            <td>300</td>
            <td>450</td>
            <td><a href="tugas3.php" target="_self"> <input type="button" name="edit" value="edit"></a></td>
        </tr>
        <tr>
            <td>M03</td>
            <td>Vga</td>
            <td>pcs</td>
            <td>400</td>
            <td>550</td>
            <td><a href="tugas3.php" target="_self"> <input type="button" name="edit" value="edit"></a></td>
        </tr>
    </table>
</body>
</html>
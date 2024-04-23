<!DOCTYPE html>
<html>
    <head>
        <script src="Kuis1.js"> </script>
        <link rel="stylesheet" type="text/css" href="Kuis1.css">
    </head>
    <title>volume balok, kubus, Tabung</title>
</head>
<body>
    <h2>Menghitung Volume bangunan</h2>
    <form>
        <input type="checkbox" id="balokCB" onchange="toggleInputFields('balok')"> Volume Balok<br>
        <input type="checkbox" id="kubusCB" onchange="toggleInputFields('kubus')"> Volume Kubus<br>
        <input type="checkbox" id="TabungCB" onchange="toggleInputFields('Tabung')"> Volume Tabung<br>
        <input type="checkbox" id="balokCBlp" onchange="toggleInputFields('baloklp')"> LP Balok<br>
        <input type="checkbox" id="kubusCBlp" onchange="toggleInputFields('kubuslp')"> LP Kubus<br>
        <input type="checkbox" id="TabungCBlp" onchange="toggleInputFields('Tabunglp')"> LP Tabung<br>
        <br>
        <div id="balokInputs" style="display: none;">
            Panjang: <input type="number" id="panjang"> <br>
            Lebar: <input type="number" id="lebar"> <br>
            Tinggi: <input type="number" id="tinggi"> <br>
        </div>
        <div id="kubusInputs" style="display: none;">
            Sisi: <input type="number" id="sisi"> <br>
        </div>
        <div id="TabungInputs" style="display: none;">
            Jari: <input type="number" id="r"> <br>
            Tinggi: <input type="number" id="tinggi_tabung"> <br>
        </div>
        <button type="button" onclick="hitung()">Hitung</button>
        <br>
        <input type="number" name="hasil" id="hasil">
    </form>

    <script>
      
    </script>
</body>
</html>
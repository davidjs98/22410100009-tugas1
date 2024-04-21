<!DOCTYPE html>
<html>
    <head>
        <script src="Tugasjs3.js"> </script>
    </head>
    <title>volume balok dan kubus</title>
</head>
<body>
    <h2>Menghitung Volume bangunan</h2>
    <form>
        <input type="checkbox" id="balokCB" onchange="toggleInputFields('balok')"> Balok
        <input type="checkbox" id="kubusCB" onchange="toggleInputFields('kubus')"> Kubus
        <br>
        <div id="balokInputs" style="display: none;">
            Panjang: <input type="number" id="panjang"> <br>
            Lebar: <input type="number" id="lebar"> <br>
            Tinggi: <input type="number" id="tinggi"> <br>
        </div>
        <div id="kubusInputs" style="display: none;">
            Sisi: <input type="number" id="sisi"> <br>
        </div>
        <button type="button" onclick="hitungVolume()">Hitung Volume</button>
        <br>
        <input type="number" name="hasil" id="hasil">
    </form>

    <script>
      
    </script>
</body>
</html>
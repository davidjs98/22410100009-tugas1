<!DOCTYPE html>
<html>
<body>

<h2>JavaScript For Loop</h2>

<p id="isi"></p>

<form>
    Start :
    <input type="number" name="Start" id="start">
    <br>
    end :
    <input type="number" name="end" id="end">
    <br>
    <button type="button" onclick='myfungsi()'>hitung</button>
</form>

<script>
    function myfungsi(){
      let start = document.getElementById("start").value;
      let end = document.getElementById("end").value;
      let text = "";
      for (let i = start; i <= end; i++) {
        text = text + i + "<br>";
      }
      document.getElementById("isi").innerHTML = text;
    }
</script>

</body>
</html>

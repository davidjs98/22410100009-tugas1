<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My First Paragraph</p>

<p id="demo"></p>
<button type="button" onclick="myfungsi()">klik</button>

<script>
document.getElementById("demo").innerHTML = 5 + 6;
document.write(5+6);
function myfungsi(){
    window.alert("hai");
}
console.log("hei there");
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<center>
    <h1 id="h">Light mode</h1>
    <button id="b1" onclick="toggleMode()">switch</button>
</center>

<script>
function toggleMode() {
    var a = document.getElementById("h");
    var button = document.getElementById("b1");
    var body = document.body;

    if (body.style.backgroundColor === "black") {
        body.style.backgroundColor = "white";
        a.style.color = "black";
        a.innerHTML = "Light mode";
    } else {
        body.style.backgroundColor = "black";
        a.style.color = "white";
        a.innerHTML = "Dark mode";
    }
}
</script>

</body>
</html>

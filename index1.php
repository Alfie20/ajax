
<html>
<head>
    
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").value = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
    <p >Suggestions:</p><p style="box-sizing: border-box;
width: 150px;
         border: solid black 1px;"><span style="box-sizing: border-box;
width: 150px;
        border: solid black 1px;" id="txtHint"></span></p>
</body>
</html>
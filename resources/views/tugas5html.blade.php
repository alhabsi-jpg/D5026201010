<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Luas segitiga</title>
</head>

<body>
    <form method = "post" action="tugasphp5" >
        @csrf
        <h1>Calculator Luas Segitiga</h1>
        alas : <input type="number" name="alas">
        <br><br>
        tinggi: <input type="number" name="tinggi">
        <br>
        <input type = "submit" name = "submit" value="hitung">
    </form>
</body>

</html>

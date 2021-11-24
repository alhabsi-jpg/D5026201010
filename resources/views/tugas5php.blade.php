<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Luas segitiga</title>
<?php
function luas(){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $area = ($alas*$tinggi) / 2;
    echo "luas dari segitiga dengan alas  $alas dan tinggi $tinggi adalah $area";
}
?>
</head>

<body>
        <h1>Hasil luas segitiga</h1>
        <h2>dasd</h2>
        <p><?php luas();?></p>
</body>

</html>

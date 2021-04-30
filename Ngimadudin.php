<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Covid</title>
</head>

<body>
    <h2>FORM DATA COVID-19</h2>
    <form action="db.php" method="POST">
        <label for="wil" style="padding-right: 35px;">Nama Wilayah</label>
        <select id="wilayah" name="wilayah">
            <option value="DKI JAKARTA">DKI Jakarta</option>
            <option value="JAWA BARAT">Jawa Barat</option>
            <option value="BANTEN">Banten</option>
            <option value="JAWA TENGAH">Jawa Tengah</option>
        </select>
        <br>
        <label for="pos" style="padding-right: 43px;">Jumlah Positif</label>
        <input type="text" name="pstf" size="15" style="margin-top: 20px;">
        <br>
        <label for="raw" style="padding-right: 32px;">Jumlah Dirawat</label>
        <input type="text" name="rwt" size="15" style="margin-top: 20px;">
        <br>
        <label for="sem" style="padding-right: 32px;">Jumlah Sembuh</label>
        <input type="text" name="smbh" size="15" style="margin-top: 20px;">
        <br>
        <label for="men" style="padding-right: 20px;">Jumlah Meninggal</label>
        <input type="text" name="mnggl" size="15" style="margin-top: 20px;">
        <br>
        <label for="ope" style="padding-right: 30px;">Nama Operator</label>
        <input type="text" name="oprtr" size="15" style="margin-top: 20px;">
        <br>
        <label for="nim" style="padding-right: 25px;">NIM Mahasiswa</label>
        <input type="text" name="nim" size="15" style="margin-top: 20px;">
        <br>
        <input type="submit" name="submit" value="Kirim Data"style="background-color: aquamarine; margin-top:30px; margin-left: 80px;">
    </form>
</body>
</html>
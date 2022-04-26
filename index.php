<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Eduwork | Logic Tes</title>
</head>

<body>
    <h1>Tes Logic Eduwork - Yodi Irawan</h1>

    <ol>
        <!-- 1 -->
        <li>
            <form action="fungsi.php" method="post">
                <label for="input">Masukkan Angka</label>
                <input type="numeric" name="input" id="input">
                <input type="submit" name="submit" value="hasil">
            </form>
            <p>Hasilnya : <?php if (isset($_GET['hasil'])) {
                                echo $_GET['hasil'];
                            } ?></p>
        </li>
        <!-- 2 -->
        <li>
            <form action="fungsi.php" method="post">
                <label for="kata">Masukkan Kata</label>
                <input type="text" name="kata" id="kata">
                <input type="submit" name="submit" value="hasil">
            </form>
            <p>Hasilnya : <?php if (isset($_GET['hasilKata'])) {
                                echo $_GET['hasilKata'];
                            } ?></p>
        </li>
        <!-- 3 -->
        <li>
            <!-- <form action="fungsi.php" method="post">
                <label for="input3">Masukkan Angka</label>
                <input type="text" name="input3" id="input3">
                <input type="submit" name="submit" value="hasil">
            </form>
            <p>Hasilnya : <?php if (isset($_GET['hasilVal'])) {
                                echo $_GET['hasilVal'];
                            } ?></p> -->
            belum
        </li>
        <li>
            <form action="fungsi.php" method="post">
                <label for="angka1">Masukkan angka pertama</label>
                <input type="numeric" name="angka1"><br>
                <label for="angka2">Masukkan angka Kedua</label>
                <input type="numeric" name="angka2">
                <input type="submit" name="submit" value="hasil">
            </form>
            <p>Sesudah di swap : <?php if (isset($_GET['hasilSwap'])) {
                                        echo $_GET['hasilSwap'];
                                    } ?></p>
        </li>
        <li>
            <form action="fungsi.php" method="post">
                <label for="angka">Masukkan Angka</label>
                <input type="numeric" name="angka" id="angka">
                <input type="submit" name="submit" value="hasil">
            </form>
            <p>Hasilnya : <?php if (isset($_GET['hasilAngka'])) {
                                echo $_GET['hasilAngka'];
                            } ?></p>
        </li>
        <li>belum</li>
        <li>belum</li>
        <li>belum</li>
        <li>belum</li>
        <li>
            <form action="fungsi.php" method="post">
                <label for="tahun">Masukkan Tahun</label>
                <input type="numeric" name="tahun" id="tahun">
                <input type="submit" name="submit" value="hasil">
            </form>
            <p>Hasilnya : <?php if (isset($_GET['hasilTahun'])) {
                                echo $_GET['hasilTahun'];
                            } ?></p>
        </li>
    </ol>
</body>

</html>
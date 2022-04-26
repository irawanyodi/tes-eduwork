<?php
function faktorial($angka)
{
    if ($angka > 2) {
        return $angka * faktorial($angka - 1);
    } else {
        return $angka;
    }
}

function reverseKata($kata)
{
    $x = $kata;
    $n = strlen($x);
    for ($i = 0; $i <= floor(($n - 1) / 2); $i++) {
        $temp = $x[$i];
        $x[$i] = $x[$n - 1 - $i];
        $x[$n - 1 - $i] = $temp;
    }
    return $x;
}

function digitValue($string)
{
    $string = strrev($string);
    $count = strlen($string);
    $a = str_split($string);
    $b = [];
    for ($i = 0; $i < $count; $i++) {
        if (is_int($a[$i])) {
            $b = [$a[$i]];
        }
    }
    // var_dump($b);
    // die();
    $countb = count($b) - 1;
    for ($j = 0; $j < $countb; $j++) {
        $c = 1;
        return $b[$j] *= $c;
        $c *= 10;
    }
    return $b;
}

function swapInt($angka1, $angka2)
{
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    list($angka1, $angka2) = array($angka2, $angka1);
    $hasil = "$angka1 . $angka2";

    return $hasil;
}

function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai <= 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else {
        $temp = "Silahkan masukkan bilangan 1-100";
    }
    return $temp;
}

function cekTahun($tahun)
{
    $tahun = $_POST['tahun'];

    if ($tahun % 4 == 0) {
        $hasil = "$tahun adalah tahun KABISAT";
    } else if ($tahun % 4 != 0) {
        $hasil = "$tahun Bukan tahun KABISAT";
    }
    return $hasil;
}

if (isset($_POST['submit'])) {
    // 1
    if (isset($_POST['input'])) {
        $angka = $_POST['input'];
        $hasil = faktorial($angka);
        header("location: index.php?hasil=$hasil");
    }
    // 2
    if (isset($_POST['kata'])) {
        $kata = $_POST['kata'];
        $hasilKata = reverseKata($kata);
        header("location: index.php?hasilKata=$hasilKata");
    }
    // 3
    if (isset($_POST['input3'])) {
        $string = $_POST['input3'];
        $hasilVal = digitValue($string);
        header("location: index.php?hasilAngka=$hasilVal");
    }
    // 4
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];
        $hasilAngka = penyebut($angka);
        header("location: index.php?hasilAngka=$hasilAngka");
    }
    if (isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];
        $hasilTahun = cekTahun($tahun);
        header("location: index.php?hasilTahun=$hasilTahun");
    }
    if (isset($_POST['angka1'])) {
        $hasilSwap = swapInt($angka1, $angka2);
        header("location: index.php?hasilSwap=$hasilSwap");
    }
}

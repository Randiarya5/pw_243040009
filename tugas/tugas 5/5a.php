<?php
$presiden = [
    [
        "namapresiden" => "Ir. Soekarno",
        "namawakil" => "Mohammad Hatta",
        "tahun" => "18 Agustus 1945-12 Maret 1967",
        "presiden" => "Soekarno.jpg"
    ],
    [
        "namapresiden" => "Soeharto",
        "namawakil" => "Sri Sultan Hamengkubuwono IX (Menjabat mulai 24 Maret 1973-23 Maret 1978), Adam Malik (Menjabat mulai 23 Maret 1978-11 Maret 1983), Umar Wirahadikusumah (Menjabat mulai 11 Maret 1983-11 Maret 1988), Soedharmono (Menjabat mulai 11 Maret 1988-11 Maret 1993), Try Sutrisno (Menjabat mulai 11 Maret 1993-11 Maret 1998), Bacharuddin Jusuf Habibie (Menjabat mulai 11 Maret 1998-21 Mei 1998)",
        "tahun" => " 27 Maret 1968 (pengukuhan jabatan sebagai presiden RI kedua) - 21 Mei 1998",
        "presiden" => "Soeharto.jpg"
    ],
    [
        "namapresiden" => "Bacharuddin Jusuf Habibie ",
        "namawakil" => "Tidak ada",
        "tahun" => "21 Mei 1998-20 Oktober 1999",
        "presiden" => "Habibie.jpg"
    ],
    [
        "namapresiden" => "KH. Abdurrahman Wahid",
        "namawakil" => "Megawati Soekarnoputri",
        "tahun" => "20 Oktober 1999-23 Juli 2001",
        "presiden" => "Gusdur.jpg"
    ],
    [
        "namapresiden" => "Megawati Soekarnoputri",
        "namawakil" => "Hamzah Haz",
        "tahun" => " 23 Juli 2001-20 Oktober 2004 ",
        "presiden" => "Megawati.JPG"
    ],
    [
        "namapresiden" => "Susilo Bambang Yudhoyono ",
        "namawakil" => "Muhammad Jusuf Kalla (Menjabat mulai 20 Oktober 2004–20 Oktober 2009), Boediono (Menjabat mulai 20 Oktober 2009–20 Oktober 2014)",
        "tahun" => "20 Oktober 2004-20 Oktober 2014",
        "presiden" => "SBY.JPG"
    ],
    [
        "namapresiden" => "Joko Widodo ",
        "namawakil" => "Muhammad Jusuf Kalla (Menjabat mulai 20 Oktober 2014–20 Oktober 2019), Maruf Amin (Menjabat mulai 20 Oktober 2019–sekarang)",
        "tahun" => "20 Oktober 2014-2025",
        "presiden" => "Jokowi.JPG"
    ],
    [
        "namapresiden" => "Prabowo Subianto",
        "namawakil" => "Gibran Rakabuming Raka",
        "tahun" => "2025-bentarlagilengserkeknya",
        "presiden" => "Prabowo.JPG"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a</title>
</head>

<body>
    <h2 style="margin-left: 1.7rem;">Daftar Presiden Indonesia</h2>
    <ul>
        <?php foreach ($presiden as $f) : ?>
            <li>
                <strong>PRESIDEN:</strong> <?= $f["namapresiden"]; ?><br>
                <strong>WAKIL PRESIDEN:</strong> <?= $f["namawakil"]; ?><br>
                <strong>LAMA MENJABAT:</strong> <?= $f["tahun"]; ?><br>
                <img src="img/<?= $f["presiden"]; ?>" ? width="100">
            </li>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>

</body>

</html>
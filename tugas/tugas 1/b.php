     <title>B</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        b {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $angka = 23;
        
        echo "<p>Aku adalah angka <b>$angka</b></p>";

        $angka *= 5;
        echo "<p>Jika aku dikali 5, maka aku sekarang menjadi <b>$angka</b></p>";

        $angka /= 2;
        echo "<p>Jika aku dibagi 2, maka aku sekarang menjadi <b>$angka</b></p>";

        $angka += 75;
        echo "<p>Jika aku ditambah 75, maka aku sekarang menjadi <b>$angka</b></p>";

        $angka -= 20;
        echo "<p>Jika aku dikurang 20, maka aku sekarang menjadi <b>$angka</b></p>";
        ?>
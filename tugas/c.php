<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 20px;
        }
        .row {
            display: flex;
        }
        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            color: black;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            margin: 2px;
        }
    </style>
</head>
<body>
    <div class="grid">
        <div class="row">
            <div class="box">1</div>
        </div>
        <div class="row">
            <div class="box">2</div>
            <div class="box">2</div>
        </div>
        <div class="row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>
</body>
</html>

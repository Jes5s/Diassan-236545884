<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E0B0FF; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #f5f5dc; 
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            text-align: center;
            width: 400px;
        }
        h1 {
            color: #6A0DAD; 
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="card">
        <h1>Swapping Variable</h1>
<?php
$x = 20;
$y = 25;
$temp = $x;
$x = $y;
$y = $temp;
echo "After swapping: x = $x, y = $y<br><br>";
?>
</body>
</html>
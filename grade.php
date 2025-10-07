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
        <h1>Simple Grading System</h1>
<?php
$math = 90;
$english = 94;
$science = 87;
$average = ($math + $english + $science)/3;
if($average >= 90){
    $grade = "A";
} elseif($average >= 80){
    $grade = "B";
} elseif($average >= 70){
    $grade = "C";
} elseif($average >= 60){
    $grade = "D";
} else{
    $grade = "F";
}
echo "Average: " . round($average, 2) . " | Grade: $grade";
?>
</body>
</html>
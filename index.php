<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>งาน PHP</title>
    <style>
        body {
            font-family: Tahoma;
            background: #f2f2f2;
            padding: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            width: 600px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        h2 {
            color: #0066cc;
            margin-bottom: 10px;
        }
        pre {
            background: #222;
            color: #0f0;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>1. ข้อมูลนักศึกษา</h2>

    <?php
        
        $university = "มหาวิทยาลัยราชภัฎอุดรธานี";
        $faculty    = "คณะวิทยาศาสตร์";
        $major      = "สาขาเทคโนโลยีสารสนเทศ";
        $name   = "นางสาวเวณิษา สีมา";
        $bio        = "สวัสดีค่ะ ดิฉันนางสาวเวณิษา สีมา ชื่อเล่นชื่อ เว ตอนนี้อายุ 20ปี และกำลังศึกษาอยู่ที่มรภ.อุดรธานี
                        คณะวิทยาศาสตร์ สาขาเทคโนโลยีสารสนเทศค่ะ";
    ?>

    <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
    <p><b>คณะ:</b> <?= $faculty ?></p>
    <p><b>สาขา:</b> <?= $major ?></p>
    <p><b>ชื่อนักศึกษา:</b> <?= $name ?></p>
    <p><b>แนะนำตัว:</b> <?= $bio ?></p>

    <hr>

    <h2>2. รูปแบบลูปต่างๆ</h2>

<!-- ======================================================= -->
<!-- 1) รูปที่ 1 : 
*
**
***
****
-->
<h2>1) รูปที่ 1</h2>

<pre>
<?php
echo "=== ใช้ for ===\n";
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "\n";
}

echo "\n=== ใช้ while ===\n";
$i=1;
while($i<=5){
    $j=1;
    while($j<=$i){
        echo "*";
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n=== ใช้ do...while ===\n";
$i=1;
do{
    $j=1;
    do{
        if($j>$i) break;
        echo "*";
        $j++;
    }while(true);
    echo "\n";
    $i++;
} while($i<=5);
?>
</pre>

<!-- ======================================================= -->
<!-- 2) รูปที่ 2 :
1 1 1 1
2 2 2 2
3 3 3 3
-->
<h2>2) รูปที่ 2</h2>

<pre>
<?php
echo "=== ใช้ for ===\n";
for($i=1;$i<=6;$i++){
    for($j=1;$j<=7;$j++){
        echo "$i ";
    }
    echo "\n";
}

echo "\n=== ใช้ while ===\n";
$i=1;
while($i<=6){
    $j=1;
    while($j<=7){
        echo "$i ";
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n=== ใช้ do...while ===\n";
$i=1;
do{
    $j=1;
    do{
        echo "$i ";
        $j++;
    }while($j<=7);
    echo "\n";
    $i++;
}while($i<=6);
?>
</pre>

<!-- ======================================================= -->
<!-- 3) รูปที่ 3 :
1
2 2
3 3 3
-->
<h2>3) รูปที่ 3</h2>

<pre>
<?php
echo "=== ใช้ for ===\n";
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$i ";
    }
    echo "\n";
}

echo "\n=== ใช้ while ===\n";
$i=1;
while($i<=5){
    $j=1;
    while($j<=$i){
        echo "$i ";
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n=== ใช้ do...while ===\n";
$i=1;
do{
    $j=1;
    do{
        echo "$i ";
        $j++;
    }while($j <= $i);
    echo "\n";
    $i++;
}while($i<=5);
?>
</pre>

<!-- ======================================================= -->
<!-- 4) รูปที่ 4 (กรอบดาว):
* * * * * *
* 1 1 1 1 *
* 2 2 2 2 *
* 3 3 3 3 *
* * * * * *
-->
<h2>4) รูปที่ 4 (กรอบดาว)</h2>

<pre>
<?php
$rows = 5;
$cols = 6;

echo "=== ใช้ for ===\n";
for($i=1;$i<=$rows;$i++){
    for($j=1;$j<=$cols;$j++){
        if($i==1 || $i==$rows || $j==1 || $j==$cols){
            echo "* ";
        } else {
            echo ($i-1)." ";
        }
    }
    echo "\n";
}

echo "\n=== ใช้ while ===\n";
$i=1;
while($i<=$rows){
    $j=1;
    while($j<=$cols){
        if($i==1 || $i==$rows || $j==1 || $j==$cols){
            echo "* ";
        } else {
            echo ($i-1)." ";
        }
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n=== ใช้ do...while ===\n";
$i=1;
do{
    $j=1;
    do{
        if($i==1 || $i==$rows || $j==1 || $j==$cols){
            echo "* ";
        } else {
            echo ($i-1)." ";
        }
        $j++;
    }while($j<=$cols);
    echo "\n";
    $i++;
}while($i<=$rows);
?>
</pre>

<!-- ======================================================= -->
<!-- 5) รูปที่ 5 :
3 3 3
2 2
1
-->
<h2>5) รูปที่ 5</h2>

<pre>
<?php
echo "=== ใช้ for ===\n";
for($i=4;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "$i ";
    }
    echo "\n";
}

echo "\n=== ใช้ while ===\n";
$i=4;
while($i>=1){
    $j=1;
    while($j<=$i){
        echo "$i ";
        $j++;
    }
    echo "\n";
    $i--;
}

echo "\n=== ใช้ do...while ===\n";
$i=4;
do{
    $j=1;
    do{
        echo "$i ";
        $j++;
    }while($j <= $i);
    echo "\n";
    $i--;
}while($i>=1);
?>
</pre>

</div>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhap a:<input type="number" name="a">
        <br>
        Nhap b:<input type="number" name="b">
        <br>
        Nhap c:<input type="number" name="c">
        <br>
        <button type="submit">Find Roots</button>
        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            if (empty($a)||empty($b)||empty($c)){
                echo 'Hay nhap du hang so';
            }else{
                include 'QuadraticEquation.php';
                $quadratic=new QuadraticEquation($a,$b,$c);
                $quadratic->getDiscriminant();
                $root= $quadratic->getRoot();
                echo $root;
            }
        }
        ?>
    </form>
</body>
</html>

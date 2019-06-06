<?php
    include "Rectangle.php";
    $rec= new Rectangle(20,50);
    echo "Area: ".$rec->getArea();
    echo "Perimeter: ".$rec->getPerimeter();
    echo $rec->display();
?>

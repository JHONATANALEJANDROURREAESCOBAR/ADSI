<?php
    $n1=$_POST['Num1'];
    $n2=$_POST['Num2'];
    $n3=$_POST['Num3'];
    echo "<table border='1'>";
    echo "<tr><td colspan=5><h1>TABLA DEL $n3</h1></td></tr>";
    $ac1=$ac2=$ac3=0;
    $i=$n1;
    do{
       echo "<tr><td>".$i."</td><td>*</td><td>".$n3."</td><td>=</td><td>".$n3*$i."</d></tr>";
        $ac1+=$i;
        $ac2+=$n2;
        $ac3+=$n3;
        $i++;
    }while($i<=$n2);
    echo "<tr><td colspan=2>$ac1</td><td colspan=2>$ac2</td><td>$ac3</td></tr>";
    echo "</table>";
?>
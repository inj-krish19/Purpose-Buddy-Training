<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>

<?php

    /*  Array Functions     */

    echo "<h2>Array Functions</h2>";

    $arr = array(2,4,6,8,10,1,3,5,7,9);

    echo "Array Is ";           print_r($arr);  echo "<br><br>";

    echo "Count Of Array Is ", count($arr),"<br><br>";

    list($a,$b) = $arr;     #   works only in numerical and string
    echo "List Of Array Is $a and $b <br><br>";

    $a = 9;
    echo "$a in Array Is ", in_array($a,$arr) ,"<br><br>";

    //  Traversal 

    echo "Current Element ",current($arr),"<br>";
    echo "Next Of Current Element ",next($arr),"<br>";
    echo "Next Of Last Next Element ",next($arr),"<br>";
    echo "Previous Of Last Next Element ",prev($arr),"<br>";
    echo "End Element Is ",end($arr),"<br>";
    // echo "Next Of End Element Is ",next($arr),"<br>";    =>  null    ' '
    echo "Previous Of End Element ",prev($arr),"<br><br>";

    //  each not available now  =>  it Makes Pair Of Key and Value

    /*  e.g.    1 , value , 0 , key  */

    sort($arr);
    echo "Sorted Array Is ";    print_r($arr);  echo "<br><br>";

    rsort($arr);
    echo "Reverse Sorted Array Is ";    print_r($arr);  echo "<br><br>";

    $ar1 = array(1,3,5);
    $ar2 = array(2,4);

    $ar = array_merge($ar1,$ar2);

    echo "Merging 2 Array In a Array "; print_r($ar);  echo "<br><br>";

    $ar = array_reverse($ar);
    echo "Reversed Array Is "; print_r($ar);  echo "<br><br>";

    /*  Miscellaneous Function      */

    sayHello();

?>
</html>
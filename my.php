<?php
    echo 'Hello World';
    echo '<h1>Hey there</h1>';

    $x = 10;
    echo $x;
    $x = 'saad noor';
    echo $x;


    $x = 10;
    $y = 20;
    echo $x + $y;



    $num = 40;

    if($num >= 80)
    {
        echo 'A+';
    }
    else if($num >= 75)
    {
        echo 'A';
    }
    else if($num >= 70)
    {
        echo 'A-';
    }
    else
    {
        echo 'F';
    }


    for($x=0; $x<10; $x++)
    {
        echo $x . " ";
    }


    $i = 0;
    while($i<10)
    {
        echo $i;
        $i++;
        
        if($i%10==7)
        {
            break;
        }
    }


    $arr1 = array(4, 3, 1, 5);
    echo $arr1[0] . "<br>";

    $arr2 = array(
        array(2, 3, 5),
        array(8, 2, 1),
        array(9, 0, 6)
    );
    echo $arr2[2][1] . "<br>";


    function add($x, $y)
    {
        return $x + $y;
    }

    $res = add(6, 7);
    echo $res . "<br>";



    $person = array('A+'=>100, 'A'=>80, 'A-'=>60);
    echo $person['A-'] . "<br>"
?>
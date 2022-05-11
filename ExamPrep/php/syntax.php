<?php
    echo '<h1>Hello World</h1>';
    print 'heyyy<br>';

    $x = 10;
    echo $x;
    $x = ' my name is saad';
    echo $x;

    $x = 10;
    $y = 20;
    $sum = $y * $x;
    echo $sum;

    $num = 88;

    if($num>=80){
        echo 'A+<br>';
    }
    else if($num>=70){
        echo 'A<br>';
    }
    else{
        echo 'stfu<br>';
    }

    for($i=0; $i<10; $i++){
        echo $i . '<br>';
    }
    $i = 0;
    while($i<10){
        $i++;
        if($i==8)
            continue;
        echo $i.'<br>';
    }

    $num_array = array(0, 4, 12, 23, 12);
    echo $num_array[3];

    $arr_2d = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    echo $arr_2d[1][3];

    function add($a, $b){
        return $a + $b;
    }
    $sum = add(5, 19);
    echo $sum;

    $assaray = array(
        'saad'=>80,
        'raad'=>89,
        'raisa'=>100,
        'fency'=>95
    );
    echo $assaray['saad'];
?>
<?php
    
    function fib($lim)
    {
    	$cur = 1;
        $prev = 1;
    	for($i=1; $i<=$lim; $i++)
        {
        	if($i>2)
            {
            	$tmp = $cur;
                $cur += $prev;
                $prev = $tmp;
            }
        }
        
        return $cur;
        	
	}
    
    
    echo fib(7) . "<br>";
?>
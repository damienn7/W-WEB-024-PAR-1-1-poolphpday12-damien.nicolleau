<?php

function my_sort(&$arr)
{   
    static $count=0;
    $count++;

    if(!is_array($arr))
    {
        return $count;
    }

    $first=$arr[0];
    $last=array_reverse($arr)[0];

    foreach($arr as $key => &$value)
    {
        if($key==0)
        {
            $value=$last;
        }
    }

    foreach(array_reverse($arr) as $key => &$value)
    {
        if($key==0)
        {
            $value=$first;
        }
    }

    return $count;
}

//$arr=array("banane","pomme","kiwi");
//my_sort($arr);

var_dump($arr);
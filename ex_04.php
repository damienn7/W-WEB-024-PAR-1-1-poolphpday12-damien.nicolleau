<?php

function resum_join_str($str1,$str2)
{
    if(!is_string($str1)||!is_string($str2))
    {
        return;
    }

    for($i=0;$i<12;$i++)
    {
        $return1.=$str1[$i];
    }

    $str2=strrev($str2);
    for($i=0;$i<8;$i++)
    {
        $return2.=$str2[$i];
    }

    $return2=strrev($return2);
    $return=$return1.$return2;
    
    return $return;
}

//resum_join_str("bonjour je m'appelle","Comment ca va Damien");
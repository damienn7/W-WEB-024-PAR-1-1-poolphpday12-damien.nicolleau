<?php

function resum_join_str($str1,$str2)
{

    $return1="";
    $return2="";
    if(!is_string($str1)||!is_string($str2))
    {
        return;
    }

    for($i=0;$i<12;$i++)
    {
        if($str1[$i]=="\t"&&$str1[$i+1]=="\t")
        {
            $str1[$i]="";
        }
        elseif($str1[$i]==" "&&$str1[$i+1]==" ")
        {
            $str1[$i]="";
        }
        elseif($str1[$i]=="\n"&&$str1[$i+1]=="\n")
        {
            $str1[$i]="";
        }
        else
        {
            $return1.=$str1[$i];
        }
    }

    $str2=strrev($str2);
    for($i=0;$i<8;$i++)
    {
        if($str2[$i]=="\t"&&($str2[$i+1]=="\n"||$str2[$i+1]==" "||$str2[$i+1]=="\t"))
        {
            $str2[$i]="";
        }
        elseif($str2[$i]==" "&&($str2[$i+1]=="\n"||$str2[$i+1]==" "||$str2[$i+1]=="\t"))
        {
            $str2[$i]="";
        }
        elseif($str2[$i]=="\n"&&($str2[$i+1]=="\n"||$str2[$i+1]==" "||$str2[$i+1]=="\t"))
        {
            $str2[$i]="";
        }
        else
        {
            $return2.=$str2[$i];
        }
    }

    $return2=strrev($return2);
    $return=$return1.$return2;

    return $return;
}

//sum_join_str("bonjour      je m'appelle","Comment ca va Damien");
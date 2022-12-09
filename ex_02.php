<?php

function cesar2($chaine)
{

    if(gettype($chaine)!="string")
    {
        return;
    }
    $dictionary=str_split("abcdefghijklmnopqrstuvwxyz");
    $return="";
    $bool=false;
    $i=0;
    $len=strlen($chaine);
    $chaine=str_split($chaine);

while($bool==false)
{
    if($i>$len)
    {
        $bool=true;
    }
    foreach($dictionary as $key => $value)
    {
        if (ctype_upper($chaine[$i])) 
        {
            if(strtolower($chaine[$i])=="y"&&$value==$chaine[$i])
            {
                $return.="a";
            }
            if(strtolower($chaine[$i])=="z"&&$value==$chaine[$i])
            {
                $return.="a";
            }
            if($value==strtolower($chaine[$i]))
            {
                $return.=$dictionary[$key+2];
            }
        }
        else
        {
            if($chaine[$i]=="y"&&$value==$chaine[$i])
            {
                $return.="a";
            }
            if($chaine[$i]=="z"&&$value==$chaine[$i])
            {
                $return.="a";
            }
            if($value==$chaine[$i])
            {
                $return.=$dictionary[$key+2];
            }
            if($value==" ")
            {
                $return.=" ";
            }
            if($value=="\t")
            {
                $return.="\t";
            }
            if($value=="\n")
            {
                $return.="\n";
            }
        }        
    }
    $i++;
}
    echo "$return\n";
}


//cesar2("daday");
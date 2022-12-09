<?php

function rev_epur_str($chaine)
{
    if(func_num_args()==0&&!is_string($chaine))
    {
        return false;
    }
    else
    {   
        $return = "";
        $explode="";
        if(strstr($chaine,"\t")!=false)
        {
            $explode=explode("\t",$chaine);
            $separator="\t";
        }
        elseif(strstr($chaine," ")!=false)
        {
            $explode=explode(" ",$chaine);
            $separator=" ";
        }
        elseif(strstr($chaine,"\n")!=false)
        {
            $explode=explode("\n",$chaine);
            $separator="\n";
        }

        $arr=array_reverse($explode);

        $return=implode($arr," ");
        $return=rtrim(ltrim($return));
        return $return;
    }
}


//echo rev_epur_str("   .");
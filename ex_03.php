<?php

function rev_epur_str($chaine)
{
    if(func_num_args()==0&&!is_string($chaine))
    {
        return false;
    }
    else
    {   
        $chaine=trim(" ",$chaine);
        $chaine=trim("\t",$chaine);
        $chaine=trim("\n",$chaine);

        $return = "";
        if(strpos($chaine,"\t")!= false)
        {
            $explode=explode("\t",$chaine);
            $separator="\t";
        }
        if(strpos($chaine," ")!= false)
        {
            $explode=explode(" ",$chaine);
            $separator=" ";
        }
        if(strpos($chaine,"\n")!= false)
        {
            $explode=explode("\n",$chaine);
            $separator="\n";
        }

        $arr=array_reverse($explode);

        var_dump($explode);

        foreach ($arr as $value) {
            $return.=$value.$separator;
        }

        $return=trim($separator,$return);

        return $return;
}
}


echo rev_epur_str("Je m'appelle Ionut");
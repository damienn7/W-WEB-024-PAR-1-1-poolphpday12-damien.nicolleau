<?php

function printArray($tableau)
{
    if(is_array($tableau))
    {
        foreach($tableau as $key => $value)
        {
            print "$key => $value\n";
        }
    }
    else
    {
        return;
    }
}
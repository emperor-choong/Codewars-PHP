<?php

function letterCheck(array $arr): bool {
    $string1 = strtolower($arr[0]);
    $string2 = strtolower($arr[1]);
    $length2 = strlen($string2);
    for($i = 0; $i < $length2; $i++){
        if(str_contains($string1, $string2[$i]) === false){
            return false;
        }
    }

    return true;
}

// var_dump(letterCheck(["ab", "aaa"]));
// var_dump(letterCheck(["trances", "nectar"]));
// var_dump(letterCheck(["compadres", "DRAPES"]));
// var_dump(letterCheck(["parses", "parsecs"]));
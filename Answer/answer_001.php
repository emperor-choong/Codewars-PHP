<?php

function isLeapYear(int $year): bool {
    if($year % 4 === 0){
        if($year % 100 === 0){
            if($year % 400 === 0){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }else{
        return false;
    }
}

// var_dump(isLeapYear(2020));
// var_dump(isLeapYear(2000));
// var_dump(isLeapYear(2100));
// var_dump(isLeapYear(2015));

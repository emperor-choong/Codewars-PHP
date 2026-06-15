<?php

function is_sator_square(array $tablet): bool {
    $left_to_right = [];
    $top_to_bottom = [];
    $bottom_to_top = [];
    $right_to_left = [];

    $length = count($tablet);
    for($i = 0; $i < $length; $i++){
        $sum_1 = "";
        $sum_2 = "";
        $sum_3 = "";
        $sum_4 = "";
        for($j = 0; $j < $length; $j++){
            $sum_1 = $sum_1 . $tablet[$i][$j];
            $sum_2 = $sum_2 . $tablet[$j][$i];

            $sum_3 = $sum_3 . $tablet[$length-1-$i][$length-1-$j];
            $sum_4 = $sum_4 . $tablet[$length-1-$j][$length-1-$i];
        }

        // Start from upper-left corner
        $left_to_right[] = $sum_1;
        $top_to_bottom[] = $sum_2;

        // Start from lower-right corner
        $right_to_left[] = $sum_3;
        $bottom_to_top[] = $sum_4;   
    }

    if($left_to_right === $top_to_bottom && $left_to_right === $right_to_left && $left_to_right === $bottom_to_top){
        return true;
    }else{
        return false;
    }
}

// var_dump(is_sator_square([['T', 'E', 'N'],
//                           ['E', 'Y', 'E'],
//                           ['N', 'E', 'T']]));

// var_dump(is_sator_square([['N', 'O', 'T'],
//                           ['O', 'V', 'O'],
//                           ['N', 'O', 'T']]));

// var_dump(is_sator_square([['B', 'A', 'T', 'S'],
//                           ['A', 'B', 'U', 'T'],
//                           ['T', 'U', 'B', 'A'],
//                           ['S', 'T', 'A', 'B']]));

// var_dump(is_sator_square([['P', 'A', 'R', 'T'],
//                           ['A', 'G', 'A', 'R'],
//                           ['R', 'A', 'G', 'A'],
//                           ['T', 'R', 'A', 'M']]));

// var_dump(is_sator_square([['S', 'A', 'T', 'O', 'R'],
//                           ['A', 'R', 'E', 'P', 'O'],
//                           ['T', 'E', 'N', 'E', 'T'],
//                           ['O', 'P', 'E', 'R', 'A'],
//                           ['R', 'O', 'T', 'A', 'S']]));

// var_dump(is_sator_square([['S', 'A', 'L', 'A', 'S'],
//                           ['A', 'R', 'E', 'N', 'A'],
//                           ['L', 'E', 'V', 'E', 'L'],
//                           ['A', 'R', 'E', 'N', 'A'],
//                           ['S', 'A', 'L', 'A', 'S']]));
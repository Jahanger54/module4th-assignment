<?php
//5.Write a PHP function to find the second largest number in an array of numbers.
function findSecondLargest( $arr ) {
    $max = $arr[0]; // initialize max to first element of array
    $secondMax = $arr[0]; // initialize secondMax to first element of array

    // loop through array and update max and secondMax accordingly
    foreach ( $arr as $num ) {
        if ( $num > $max ) {
            $secondMax = $max;
            $max = $num;
        } else if ( $num > $secondMax && $num != $max ) {
            $secondMax = $num;
        }
    }

    return $secondMax;
}
$arr = [3, 8, 1, 9, 4, 5, 7];
$secondLargest = findSecondLargest( $arr );
echo $secondLargest; // outputs 8
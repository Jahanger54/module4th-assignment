<?php

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast( $arr ) {
    array_shift( $arr ); // remove first element
    array_pop( $arr ); // remove last element
    return $arr;
}
$myArray = array( 'apple', 'banana', 'orange', 'grape', 'kiwi' );
$newArray = removeFirstAndLast( $myArray );
print_r( $newArray );
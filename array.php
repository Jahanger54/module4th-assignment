<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order.
// (Hint: You can use the usort() function to define a custom sorting function.)

function sortStringsByLength( $arr ) {
    usort( $arr, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $arr;
}

$strings = array( "apple", "banana", "cherry", "date" );
$sorted = sortStringsByLength( $strings );
print_r( $sorted );
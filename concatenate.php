<?php

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatenate_reverse( $string1, $string2 ) {
    $string1_end = substr( $string1, -strlen( $string2 ) );
    return $string1_end . $string2;
}
$string1 = "Hello, world!";
$string2 = "everyone";
$result = concatenate_reverse( $string1, $string2 );
echo $result; // outputs "d!everyone"
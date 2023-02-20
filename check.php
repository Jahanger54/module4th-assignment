
<?php
// 4.Write a PHP function to check if a string contains only letters and whitespac
function onlyLettersAndWhitespace( $str ) {
    return preg_match( '/^[a-zA-Z\s]+$/', $str );
}

$string1 = "This is a string with only letters and whitespace";
$string2 = "This is a string with numbers and symbols (!@#$)";

if ( onlyLettersAndWhitespace( $string1 ) ) {
    echo "String 1 contains only letters and whitespace.";
} else {
    echo "String 1 contains non-letter/non-whitespace characters.";
}

if ( onlyLettersAndWhitespace( $string2 ) ) {
    echo "String 2 contains only letters and whitespace.";
} else {
    echo "String 2 contains non-letter/non-whitespace characters.";
}
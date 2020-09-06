<?php
include_once 'DivideByZeroException.php';

$result = new DivideByZeroException();
//echo $result->divide(100, 5);
//echo $result->divide(100, 0);
try {
    echo $result->divide(100, 5);
    echo "<br>";
    echo $result->divide(100, 0);
} catch (DivideByZeroException $e){
    echo 'Wrong!! ' . $e;
}

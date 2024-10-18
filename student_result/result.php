<?php

function studentResult( ...$subjects ) {
    foreach ( $subjects as $subject ) {
        switch ( $subject ) {
        case ( $subject < 0 || $subject > 100 || count( $subjects ) != 5 ):
            echo "Invalid mark range";
            return;
        }
        switch ( $subject ) {
        case ( $subject < 33 ):
            echo "You have failed";
            return;
        }
    }
    $totalNumber = array_sum( $subjects );
    $totalSubject = count( $subjects );
    $averageNumber = $totalNumber / $totalSubject;
    switch ( $averageNumber ) {
    case ( $averageNumber >= 80 ):
        $result = "A+";
        break;

    case ( $averageNumber >= 70 ):
        $result = "A";
        break;

    case ( $averageNumber >= 60 ):
        $result = "A-";
        break;
    case ( $averageNumber >= 50 ):
        $result = "B";
        break;

    case ( $averageNumber >= 40 ):
        $result = "C";
        break;
    case ( $averageNumber >= 33 ):
        $result = "D";
        break;
    default:
        $result = "F";
    }
    echo "Total Number: $totalNumber \n";
    echo "Average Number: $averageNumber \n";
    echo "Grade: $result";
}

studentResult( 54, 34, 54, 54, 86 ) . "\n"; // 5 subject all pass all subjects
//studentResult( 54, 34, 54, 54, 86, 32 ) . "\n"; // if try to input more then 5 subjects
//studentResult( 54, 34, 54, 54, ) . "\n"; // if try to input less then 5 subjects
//studentResult( 54, 34, 54, -4, 86 ) . "\n"; // if input any subject mark less then 0
//studentResult( 54, 34, 54, 54, 102 ) . "\n"; // if input any subject mark more then 100
//studentResult( 54, 34, 54, 3, 86 ) . "\n"; // if any subject mark less then 33

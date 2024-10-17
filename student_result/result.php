<?php

function studentResult( ...$subjects ) {
    foreach ( $subjects as $subject ) {
        if ( $subject < 0 || $subject > 100 || count( $subjects ) != 5 ) {
            return "Mark range is invalid";
        } elseif ( $subject < 33 ) {
            return "Result: Fail";
        } else {
            $totalNumber = array_sum( $subjects );
            $totalSubject = count( $subjects );
            $averageNumber = $totalNumber / $totalSubject;
            switch ( $averageNumber ) {
            case ( $averageNumber >= 80 ):
                $result = "Grade: A+";
                break;

            case ( $averageNumber >= 70 ):
                $result = "Grade: A";
                break;

            case ( $averageNumber >= 60 ):
                $result = "Grade: A-";
                break;
            case ( $averageNumber >= 50 ):
                $result = "Grade: B";
                break;

            case ( $averageNumber >= 40 ):
                $result = "Grade: C";
                break;
            case ( $averageNumber >= 33 ):
                $result = "Grade: D";
                break;
            default:
                $result = "Grade: F";
            }
        }
    }
    return "Total Marks: {$totalNumber} \nAverage Marks: {$averageNumber} \nGrade : {$result} ";

}

echo studentResult( 54, 34, 54, 54, 86 ) . "\n"; // 5 subject all pass all subjects
echo studentResult( 54, 34, 54, 54, 86, 32 ) . "\n"; // if try to input more then 5 subjects
echo studentResult( 54, 34, 54, 54, ) . "\n"; // if try to input less then 5 subjects
echo studentResult( 54, 34, 54, -4, 86 ) . "\n"; // if input any subject mark less then 0
echo studentResult( 54, 34, 54, 54, 102 ) . "\n"; // if input any subject mark more then 100
echo studentResult( 54, 34, 54, 3, 86 ) . "\n"; // if any subject mark less then 33

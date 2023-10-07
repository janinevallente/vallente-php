//Janine Christine Vallente BSIT-4A

<?php
 
    $delimiter = (int)readline('Enter the number of terms in a geometric progression: ');

    $startNum = 1;
    $commonRatio = 2;
    
    geometricProgression($startNum, $commonRatio, $delimiter);

    function geometricProgression($startNum, $commonRatio, $delimiter){
        for($i = 0; $i < $delimiter; $i++){
            $currentTerm = $startNum * pow($commonRatio , $i);
            echo $currentTerm, " ";
        }
    }

?>
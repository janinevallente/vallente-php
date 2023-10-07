//Janine Christine Vallente BSIT-4A

<?php
    $fullname = "Janine Christine Vallente";
    echo "Name: $fullname";

    $vowelCount = countVowels($fullname);

    function countVowels($fullname) {
        $count = 0;
        for ($i = 0; $i < strlen($fullname); $i++) {
            $current = strtolower($fullname[$i]);
            if ($current == "a" || $current == "e" || $current == "i" || $current == "o" || $current == "u") {
                $count++;
            }
        }
        return $count;
    }

    echo "\nThere are $vowelCount vowels.";
?>
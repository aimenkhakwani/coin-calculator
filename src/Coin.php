<?php
    class Coin
    {
        function calculateCoins($input)
        {
            $coinArray = array("quarterOutput" => 0, "dimeOutput" => 0, "nickelOutput" => 0, "pennyOutput" => 0);
            while($input > 0){
                if ($input >= 25) {
                    $coinArray['quarterOutput'] += 1;
                    $input -= 25;
                } elseif ($input >= 10) {
                    $coinArray['dimeOutput'] += 1;
                    $input -= 10;
                } elseif ($input >= 5) {
                    $coinArray['nickelOutput'] += 1;
                    $input -=5;
                } else {
                    $coinArray['pennyOutput'] +=1;
                    $input -=1;
                }
            }
            return $coinArray;
        }
    }
?>

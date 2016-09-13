<?php
    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_calculateCoins()
        {
            $testCoin = new Coin;
            $input = 31;
            $result = $testCoin->calculateCoins($input);
            $this->assertEquals(["quarterOutput" => 1, "dimeOutput" => 0, "nickelOutput" => 1, "pennyOutput" => 1], $result);
        }
    }

 ?>

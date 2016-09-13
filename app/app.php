<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coin.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
     return $app['twig']->render("form.html.twig");
   });

   $app->post("/output", function() use ($app) {
    $userInput = $_POST['input'];
    $myCoins = new Coin;
    $result = $myCoins->calculateCoins($userInput);
    // $result = implode(" ", $result);
    // var_dump($result);
    return $app['twig']->render("output.html.twig", array('results'=>$result));
    });

    return $app;
 ?>

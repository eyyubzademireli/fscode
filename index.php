<?php

    require __DIR__.'/vendor/autoload.php';

    $app = new \Core\Bootstrap();

    require __DIR__ . '/app/web.php';

    $app->run();
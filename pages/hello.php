<?php
return function ($request, $response, $service, $app) {
    $service->render('views/hello.php');
};
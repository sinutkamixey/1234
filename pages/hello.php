<?php
return function ($request, $response, $service, $app) {
	$name='WORLD';
	$db=$app->db();
	$users=$db->query(
	'select * from users'
	)->fetchAll();
    $service->render('views/hello.php', ['name' => $name, 'users'=>$users]);
};
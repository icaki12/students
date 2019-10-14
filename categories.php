<?php
//ucitavanje konekcije
	require_once 'database.php';
//kategorije
	$prep = $db->prepare('SELECT * FROM student ORDER BY name;');
	if (!$prep) {
		exit;
	}

	$res = $prep->execute();
	if (!$res) {
		exit;
	}

	$list = $prep->fetchAll(PDO::FETCH_OBJ);

	$json = json_encode($list);

	header('Content-type: text/json; charset=UTF-8');
	echo $json;

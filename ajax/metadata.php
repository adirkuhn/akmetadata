<?php

OCP\JSON::checkLoggedIn();
OCP\JSON::callCheck();

function metadataExtract($file) {

    $tika = __DIR__ . "/./../tika/tika-app-1.8.jar";
    $tika = "/Users/adirkuhn/Projetos/b3/owncloud/apps/files/tika/tika-app-1.8.jar";

    $cmd = "java -jar {$tika} -j " . $file;
    echo $cmd;
    $ret = shell_exec($cmd);

    return json_decode($ret, true);
}

// Get data
$dir = isset($_POST['dir']) ? $_POST['dir'] : '';
$file = isset($_POST['file']) ? $_POST['file'] : '';

$path = __DIR__ . \OC\Files\Filesystem::getLocalPath($dir) . $file;

echo __DIR__ . $path;

//var_dump($dir);
//var_dump($file);
//var_dump($path);

$response = metadataExtract($path);

//header('Content-Type: application/json');
//echo json_encode($response);
OCP\JSON::success(array('data' => $response));
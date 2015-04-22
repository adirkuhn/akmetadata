<?php

OCP\JSON::checkLoggedIn();

function metadataExtract($file) {

    $tika = __DIR__ . "/./../tika/tika-app-1.8.jar";
    $tika = "/Users/adirkuhn/Projetos/b3/owncloud/apps/files/tika/tika-app-1.8.jar";

    $output = array();
    $cmd = "(java -jar {$tika} -j " . __DIR__ . "/out.txt)2>&1";
    echo $cmd;
    $ret = system($cmd, $output);
    //$ret = system("ls -l {$tika}", $output);

    echo "<pre>";
    print_r($ret);
    print_r($output);

    return $ret;
}

// Get data
//$dir = isset($_POST['dir']) ? $_POST['dir'] : '';
//$file = isset($_POST['file']) ? $_POST['file'] : '';

//$path = \OC\Files\Filesystem::getLocalPath($dir);

//var_dump($dir);
//var_dump($file);
//var_dump($path);

$response = metadataExtract(1);

OCP\JSON::success(array("data" => $response));
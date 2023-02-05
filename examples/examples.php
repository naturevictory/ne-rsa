<?php
include_once '../vendor/autoload.php';

    $keys = NERsa::createKeys(2048);
    $rsa = new NERsa($keys['public_key'], $keys['private_key']);
    $data = "asfasdfasdf";

    $encrypted = $rsa->publicEncrypt($data);
    $decrypted = $rsa->privateDecrypt($encrypted);

    $sign = $rsa->sign($data);
    $is_valid = $rsa->verify($data, $sign);

    $privateEncrypt= $rsa->privateEncrypt($data);
    $publicDecrypt= $rsa->publicDecrypt($privateEncrypt);
    $run=[
        $encrypted,$decrypted,$sign,$is_valid,$privateEncrypt,$publicDecrypt
    ];
    dump($run);


<?php
include 'lib/wxLogin.class.php';

$wL = new wxLogin();

$wl3 = $wL->getUserInfo("001D2kFj2MpVZE0KdkHj2dRyFj2D2kFT");
print_r($wl3);
exit();

// $wl2 = $wL->getLoginState("081LazxXCkRIVwtJ");
// print_r($wl2);
// exit();


// $wlN = $wL->getLoginState("081LazxXCkRIVwtJ");
// $wl3 = $wL->getUserInfo($wlN["window.wx_code"]);
// exit();

// echo $wL->getLoginQrCode()."\n";
// echo $wL->error;
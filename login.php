<?php
opcache_reset();
function read($csv){
    $file = fopen($csv, 'r');
    while (!feof($file) ) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}

$file = 'db/users.csv';
$users = read($file);

foreach ($users as $user) {
    if (strcasecmp($_POST['email'], $user[2]) == 0) {
        session_start();
        $_SESSION['user'] = $user;
        break;
    }
}
if (isset($_SESSION['user'][1])) {
   include('ressources/connected.php');
} else {
  header('HTTP/1.0 403 Forbidden');
  header('Location: /');
}
?>

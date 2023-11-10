<?php

header('Application: Belajar PHP Web');
header('Author: Bramasta Albatio');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo    "Hello $client";
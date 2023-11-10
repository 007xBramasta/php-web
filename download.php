<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="profile.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/profile.png');
}else{
    echo "Invalid Key"; 
}
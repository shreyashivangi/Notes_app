<?php
$link = mysqli_connect("localhost", "sshellth_jotter", "NWA2VyqW598{", "sshellth_scrawl");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
?>
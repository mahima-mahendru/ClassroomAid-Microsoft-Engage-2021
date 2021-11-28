<?php

    //local host database connection---------------------------------------------------------------------------------
    // $server = "localhost";
    // $user = "root";
    // $passdb = "";
    // $db = "classroomaid";
    // $connect = mysqli_connect( $server, $user, $passdb, $db )or die( "Connection Error" );
   

    //remote host database server-for deployment------------------------------------------------------------------------
    $server = "remotemysql.com";
    $user = "2KNmQb9QLs";
    $passdb = "31JXVZj0b6";
    $db = "2KNmQb9QLs";
    $connect = mysqli_connect( $server, $user, $passdb, $db )or die( "Connection Error" );


  

?>

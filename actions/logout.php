<?php

    //  new update for git sample
    
    session_start();
    session_unset();
    session_destroy();

    header("location: ../views");
    exit;
<?php

function session_demolish()
{
    session_unset();
    session_destroy();
}

session_start();
session_demolish();

header('location: ../view/index.php');
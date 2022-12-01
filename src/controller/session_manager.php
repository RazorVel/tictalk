<?php

require_once('utilities.php');

const NO_REDIRECT = array(
    '/src/view/chat.php'
);

function session_demolish()
{
    unset($_SESSION);

    session_unset();
    session_destroy();
}
function user_fetch()
{
    //compile all known information about the client

    $identity = array();

    $identity['user-agent'] = $_SERVER['HTTP_USER_AGENT'];
    $identity['ip-address'] = $_SERVER['REMOTE_ADDR'];
    $identity['session_key'] = $_COOKIE['session_key'];

    return $identity;
}
function compare($incoming, $stored): int
{
    //compare validity of a session,
    //i.e., match if a user is who he deem to be

    // var_dump($incoming);
    // var_dump($_SESSION);
    // var_dump(array_intersect($incoming, $stored));

    if ($incoming == array_intersect($incoming, $stored))
        return 1;
    else
        return 0;

}
function connect()
{
    //resume session if a valid match is found, 
    //probe for a new one otherwise

    if (isset($_SESSION['name']) && compare(user_fetch(), $_SESSION)) {
        if (time() - $_SESSION['last-login'] > 24 * 60 * 60) {
            session_demolish();
        } else {
            if (!in_array($_SERVER['SCRIPT_NAME'], NO_REDIRECT)) {
                header('location: ../view/chat.php');
            }
        }
    } else {
        $client = user_fetch();

        $_SESSION['user-agent'] = $client['user-agent'];
        $_SESSION['ip-address'] = $client['ip-address'];
        $_SESSION['session_key'] = keyGen(20);

        setcookie('session_key', $_SESSION['session_key']);
    }
}



session_start();

connect();
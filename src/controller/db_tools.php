<?php
require_once('utilities.php');

function initialize()
{
    $connection = new mysqli('localhost:3306', 'root', '', 'tictalk');

    if ($connection->connect_error)
        return null;
    else
        return $connection;
}

function check_user_exist($connection, $email): int
{
    // check if a user exist in the database

    $statement = $connection->prepare("
        select 1
        from Users
        where
            Email = ?
    ");

    $statement->bind_param("s", $email);

    $statement->execute();

    $result = $statement->get_result();
    $result = $result->fetch_assoc();

    if (isset($result))
        return 1;
    else
        return 0;
}

function sign_in($connection, $email, $password): int
{
    //check user credential and build session

    $password = sha256_sum($password);

    $statement = $connection->prepare("
        select 1
        from Users
        where
            Email = ?
            and
            PasswordHash = ?
    ");

    $statement->bind_param("ss", $email, $password);

    $statement->execute();

    $result = $statement->get_result();
    $result = $result->fetch_assoc();

    if (isset($result))
        return 1;
    else
        return 0;
}

function register($connection, $name, $dob, $phone, $email, $password): int
{
    //register a new user into the database

    if (check_user_exist($connection, $email))
        return 0;
    else {
        $password = sha256_sum($password);

        $statement = $connection->prepare("
            insert into Users 
                (Name, DateOfBirth, PhoneNumber, Email, PasswordHash)
            values
                (?, ?, ?, ?, ?);
        ");

        $statement->bind_param("sssss", $name, $dob, $phone, $email, $password);

        $statement->execute();

        return 1;
    }
}

$connection = initialize();
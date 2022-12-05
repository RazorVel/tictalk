<?php
require_once('../controller/db_tools.php');

function sendMessage($connection, $src, $dest, $type, $desc)
{
    $desc = htmlspecialchars($desc, ENT_QUOTES, 'UTF-8');

    $statement = $connection->prepare('
        insert into Chats
            (Source, Destination, Type, Description)
        values
            (?, ?, ?, ?)
    ');

    $statement->bind_param('ssss', $src, $dest, $type, $desc);

    $statement->execute();
}

function retrieveMessage($connection, $src, $dest)
{
    $statement = $connection->prepare('
        select *
        from Chats
        where
            Source = ? and Destination = ?
        order by Time asc
    ');

    $statement->bind_param('ss', $src, $dest);

    $statement->execute();

    $result = $statement->get_result();

    return $result;
}
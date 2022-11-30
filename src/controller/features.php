<?php
require_once('./db_tools.php');

function sendMessage($connection, $src, $dest, $desc)
{
    $statement = $connection->prepare('
        insert into Chats
            (Source, Destination, Description)
        values
            (?, ?, ?)
    ');

    $statement->bind_param('sss', $src, $dest, $desc);

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
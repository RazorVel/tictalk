use tictalk;

create table Users (
    Name varchar(255) not null,
    DateOfBirth date null,
    PhoneNumber varchar(255) null,
    Email varchar(255) not null,
    PasswordHash varchar(255) not null,

    primary key (Email)
);
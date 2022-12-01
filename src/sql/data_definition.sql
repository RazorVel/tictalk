use tictalk;

create table Users (
    Name varchar(255) not null,
    DateOfBirth date null,
    PhoneNumber varchar(255) null,
    Email varchar(255) not null,
    PasswordHash varchar(255) not null,

    primary key (Email)
);

create table Chats (
    ChatID int not null auto_increment,
    Source varchar(255) not null,
    Destination varchar(255) not null,
    Description varchar(255) not null,
    Time datetime not null default now(),
    Type varchar(255) not null,

    primary key (ChatID),
    foreign key (Source) References Users(Email),
    foreign key (Destination) References Users(Email)
);
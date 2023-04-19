create database ToDoList;
use ToDoList;

create table usersLists(
id int auto_increment,
name varchar(255),
email varchar(255),
passwd varchar(255),
primary key (id)
)

create table lists(
id int auto_increment,
taskname varchar(255),
contents varchar(255),
primary key (id)
)
create database ecell;

	create table events(
    id int auto_increment primary key,
    title varchar(50),
    date datetime,
    tagline varchar(100),
    description varchar(200),
    coordinator varchar(100),
    event_type varchar(100)
    -> );

    create table event_categories(event_name varchar(100) primary key);
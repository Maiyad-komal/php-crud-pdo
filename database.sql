drop database if exists `user`;

create database `user`;

use `user`;
 
create table `user_details`(
id int primary key auto_increment,
name varchar(255),
password varchar(255)

);


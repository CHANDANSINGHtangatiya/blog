<?php

$server="localhost";
$user="root";
$password="";
$dbname="blogWebsite";

$conn=mysqli_connect($server,$user,$password,$dbname);

if ($conn){
  
    $query="CREATE TABLE IF NOT EXISTS users(
        id int(11) primary key AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        number varchar(255) NOT NULL,
        password varchar(255) NOT NULL,
        user_type varchar(255) default 'user'
    )";

    mysqli_query($conn,$query);


    $blog="CREATE TABLE IF NOT EXISTS blogs(
        id int(11) primary key AUTO_INCREMENT,
        image varchar(255) NOT NULL,
        heading text NOT NULL,
        author text not null,
        Rdate  date not null,
        containt text not null,
        popular text not null,
        latest text not null
    )";
    mysqli_query($conn,$blog);


    $sql="CREATE TABLE IF NOT EXISTS startups(
        id int(11) primary key AUTO_INCREMENT,
        image varchar(255) NOT NULL,
        heading text NOT NULL,
        author text not null,
        Rdate date not null,
        containt text not null,
        popular text not null,
        latest text not null
    )";
    mysqli_query($conn,$sql);

    $sql="CREATE TABLE IF NOT EXISTS securitys(
        id int(11) primary key AUTO_INCREMENT,
        image varchar(255) NOT NULL,
        heading text NOT NULL,
        author text not null,
        Rdate date not null,
        containt text not null,
        popular text not null,
        latest text not null
    )";
    mysqli_query($conn,$sql);

    
    $sql="CREATE TABLE IF NOT EXISTS ais(
        id int(11) primary key AUTO_INCREMENT,
        image varchar(255) NOT NULL,
        heading text NOT NULL,
        author text not null,
        Rdate date not null,
        containt text not null,
        popular text not null,
        latest text not null
    )";
    mysqli_query($conn,$sql);

    $sql="CREATE TABLE IF NOT EXISTS techs(
        id int(11) primary key AUTO_INCREMENT,
        image varchar(255) NOT NULL,
        heading text NOT NULL,
        author text not null,
        Rdate date not null,
        containt text not null,
        popular text not null,
        latest text not null
    )";
    mysqli_query($conn,$sql);


}
else{
    echo "no connection";
}


?>
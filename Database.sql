create database if not exists PostDevide;

use PostDevide;

create table think_commodityinfo(
  commodity varchar(30) not null primary key,
  classification varchar(50) not null,
  platform varchar(50) not null,
  shop varchar(30) not null,
  duration varchar(30) not null,
  description text not null,
  longitude float(4,1) not null,
  latitude float(4,1) not null,
  accuracy varchar(30) not null
);

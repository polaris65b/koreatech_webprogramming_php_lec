create table STADIUM (
  Stadium_id char(3) not null,
  Stadium_name varchar(40) not null,
  Hometeam_id char(3),
  Seat_count int,
  Address varchar(60),
  Area_num varchar(3),
  tel varchar(10),
  primary key(Stadium_id)
);
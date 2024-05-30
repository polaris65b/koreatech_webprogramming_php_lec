CREATE TABLE team_k_league (
  Team_id char(3) not null,
  Region_name varchar(8) not null,
  Team_name varchar(40) not null,
  E_Team_name varchar(50),
  ORIG_YYYY char(4),
  Stadium_id char(3) not null,
  address varchar(80),
  Area_num varchar(3),
  tel varchar(10),
  Zip_code char(6),
  homepage varchar(5),
  primary key(Team_id),
  foreign key(Stadium_id) REFERENCES stadium(Stadium_id)
);
drop table if exists t;

create table t (
  id int not null primary key auto_increment,
  name varchar(255) not null
);

insert into t values (null, 'ore');
insert into t values (null, 'are');
insert into t values (null, 'sore');
insert into t values (null, 'dore');

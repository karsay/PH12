set names utf8;
use nhs90556db;

create table bbs_tbl(bbs_no SERIAL,bbs_name nvarchar(100),bbs_title nvarchar(100),bbs_date varchar(20),bbs_delkey varchar(20),primary key(bbs_no));
insert into bbs_tbl(bbs_name,bbs_title,bbs_date,bbs_delkey) values('ぴかちゅう','さくら咲いた','2019/12/09 11:21:30','12345');
insert into bbs_tbl(bbs_name,bbs_title,bbs_date,bbs_delkey) values('はっとりくん','夕飯はカレー','2019/12/09 11:25:30','12345');
insert into bbs_tbl(bbs_name,bbs_title,bbs_date,bbs_delkey) values('こうちゃん','一日一膳','2019/12/22 18:20:30','12345');


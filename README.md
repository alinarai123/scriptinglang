# scriptinglang

1. DDL(Data Difinition Language):
 create, drop, alter, rename


2. DML(Data Manipulation Language):
Select --> Retrive
Insert --> Create
Update --> Update
Delete
Merge

3. TLC(Transaction Control Language)
Commit
Roolback
Set Transaction

4. DCL(Data Controll Language)
read access, R/W access, access
 grant, revoke

insert into blog ( title, detail ) VALUES ('Savage Love', 'TikTok sensation Jawsh 685 releases Savage Love remix featuring Jason Derulo and BTS');

// select query // * -> all

select * from blog where id = '2';
select * from blog where id = '2' and  title = 'savage love';
select * from blog where id = '2'  or title = 'savage love';

// update query

update blog set title = 'savage loves', detail = 'savage love is a great music with extraordinary tune' where id = '1';

// delete query

delete from blog where title = 'savage loves';

     
     
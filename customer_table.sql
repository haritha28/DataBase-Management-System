create table Customer_Details (
	cid int primary Key NOT NULL, 
	cname char(50),
	cgender char(6),
	cphone numeric(10,0),
	cdate date );

select * from Customer_Details;

drop table Customer_Details;

insert into Customer_Details values( 1001, 'Ram' , 'Male' ,1006532897 , '2013-11-9');
insert into Customer_Details values( 1002, 'Parvati' , 'Female' , 1234789050 , '2014-5-09');
insert into Customer_Details values( 1003, 'Mary', 'Female' ,9876543210 , '2012-12-8');
insert into Customer_Details values( 1005, 'Gopal' , 'Male',7567893452 , '2013-02-03');



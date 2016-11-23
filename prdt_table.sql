create table Product_Details (
	Id int primary Key NOT NULL, 
	Pname char(50),
	Pcost float NOT NULL,
	Pcount int );
alter table Product_Details add Pcategory char(50);

insert into Product_Details values( 1, 'Oreo', 20 , 100 , 'Biscuits');
insert into Product_Details values( 3, 'Parle-G', 10 , 50 , 'Biscuits');
insert into Product_Details values( 4, 'MarieGold', 15 , 50 , 'Biscuits');
insert into Product_Details values( 5, 'Dark Fantasy', 20 , 70 , 'Biscuits');
insert into Product_Details values( 6, 'Good Day', 30 , 75 , 'Biscuits');
insert into Product_Details values( 7, 'Sunfeast', 25 , 50 , 'Biscuits');
insert into Product_Details values( 8, 'Jim-Jam', 20 , 40 , 'Biscuits');
insert into Product_Details values( 9, 'Milano', 20 , 100 , 'Biscuits');

select * from Product_Details;

insert into Product_Details values( 200, 'Nike', 120 , 10 , 'Deo');
insert into Product_Details values( 201, 'Fa', 210 , 50 , 'Deo');
insert into Product_Details values( 202, 'Layer', 115 , 50 , 'Deo');
insert into Product_Details values( 203, 'Eva', 210 , 70 , 'De0');
insert into Product_Details values( 204, 'Enchanteur', 130 , 75 , 'Deo');
insert into Product_Details values( 205, 'Nivea', 250 , 50 , 'Deo');
insert into Product_Details values( 206, 'Yardley', 240 , 40 , 'Deo');
insert into Product_Details values( 207, 'Dove', 200 , 100 , 'Deo');

insert into Product_Details values( 100, 'Lux', 20 , 100 , 'Soap');
insert into Product_Details values( 102, 'Detol', 10 , 50 , 'Soap');
insert into Product_Details values( 103, 'Medimex', 15 , 50 , 'Soap');
insert into Product_Details values( 104, 'Vivel', 20 , 70 , 'Soap');
insert into Product_Details values( 105, 'Lifeboy', 30 , 75 , 'Soap');
insert into Product_Details values( 106, 'Dove', 25 , 50 , 'Soap');
insert into Product_Details values( 107, 'Pear', 20 , 100 , 'Soap');
insert into Product_Details values( 108, 'Fiama', 20 , 100 , 'Soap');


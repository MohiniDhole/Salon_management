create table admin(
	admin_id text primary key,
	admin_pwd text
);

insert into admin values('admin','admin');

create table client(
	client_id serial primary key,
	client_name text unique,
	client_phone varchar(10),
	client_email varchar(50),
	client_pass varchar(20)
);

insert into client(client_name, client_phone, client_email, client_pass) values
('Manoj Kadam','8975348057','manoj@gmail.com', 'manoj'),
('Ajay Dendge','8975458540','ajay@gmail.com','ajay'),
('Shubham Deshmukh','9890166242','shubham@gmail.com','shubham'),
('Sagar Rode','9999456521','sagar@gmail.com','sagar'),
('Pratik Auty','9096121648','pratik@gmail.com','pratik');

create table services(
	serv_id serial primary key,
	serv_name varchar(100),
	serv_price float,
	serv_type varchar(30)
);

insert into services(serv_name,serv_price,serv_type) values('Interview Makeup', 200, 'Makeup'),
('Party make up',500,'Makeup'),
('Haircut for childs',250,'Haircut'),
('Haircut for youngster',200,'Haircut'),
('Hair Ironing',400,'Haircut'),
('Light and Bright Facials',1000,'Facials'),
('Young Blush Forever Facials',1000,'Facials'),
('Hair Touch Up',1000,'Hair Coloring');

create table stylist(
	stylist_id serial primary key,
	stylist_name text,
	stylist_phone varchar(10),
	stylist_spec text,
	stylist_salary float,
	stylist_status text
);

insert into stylist(stylist_name,stylist_phone,stylist_spec,stylist_salary,stylist_status) values
('Krishna','8978544565','Hair stylist',25000,'Free'),
('Rohan','8715982045','Makeup',20000,'Free'),
('Soham','9096256584','Facials',21000,'Free'),
('Swapnil','8975348975','Trimming Beard',1500,'Free'),
('Manoj','9085456514','Cutting and Styling',2500,'Free'),
('Nayan','9085457514','Shaving',22500,'Free');

create table booking(
	booking_id serial primary key,
	booking_date date,
	serv_id int references services(serv_id) on delete cascade,
	stylist_id int references stylist(stylist_id) on delete cascade,
	client_id int references client(client_id) on delete cascade,
	status text
);

CREATE DATABASE QLTV

--TAO BANG STUDENT
CREATE TABLE Students (
	student_id INT PRIMARY KEY,
	student_name VARCHAR (50) NOT NULL,
	student_birthday DATE NOT NULL,
	student_address VARCHAR(500),
	email VARCHAR(50) NOT NULL,
	image VARCHAR(500));



--TAO BANG BORROW_CARD
CREATE TABLE Borrow_card(
	card_id int PRIMARY KEY,
	student_id int,
	borrow_date date,
	borrow_return date,
	foreign key(student_id) references Students(student_id));

--TAO BANG CATEGORY
CREATE TABLE Category(
	category_id int primary key,
	category_name varchar(30));

--TAO BANG BOOK
CREATE TABLE Books (
	book_id INT PRIMARY KEY,
	book_name VARCHAR(20) NOT NULL,
	author VARCHAR(20)NOT NULL,
	NXB VARCHAR(20) NOT NULL,
	price INT NOT NULL,
	year_export DATE NOT NULL,
	category_id int not null,
	number_public int not null,
	foreign key(category_id) references Category(category_id));

CREATE TABLE Books_borrow(
	book_id int not null,
	card_id int not null,
	foreign key(book_id) references Books(book_id),
	foreign key(card_id) references Borrow_card(card_id));

CREATE ta
create table patient_records(
	patientID int primary key identity(100001,1) NOT NULL,
	date_expo date,
	place_expo varchar(120) NOT NULL,
	type_expo varchar(120),
	source_expo varchar(120),
	cat_expo varchar(3),
	post_expo varchar(120),
	washing_bite varchar(3),
	date_rig date,
	[gen_name] [varchar](120) NULL,
	[brand_name] [varchar](100) NULL,
	[route] [varchar](2) NULL,
	[day3] [date] NULL,
	[day7] [date] NULL,
	[day14_IM] [date] NULL,
	[day28_30] [date] NULL,
	[Status] [varchar](200) NULL,
	[remark] [varchar](200) NULL,
	[Doctor] [varchar](50) NOT NULL,
	patient_detID int,
	FOREIGN KEY (patient_detID) REFERENCES patient_details(patient_detID),
);

create table patient_details(
	patient_detID int primary key identity(2000002,1) NOT NULL,
	lname varchar(50) NOT NULL,
	fname varchar(50) NOT NULL,
	mname varchar(50) NOT NULL,
	address varchar(100) NOT NULL,
	age varchar(20) NOT NULL,
	cnum char(11) NOT NULL,
	Sex varchar(6) NOT NULL
);

alter table patient_details
add Date_Added date

CREATE TABLE [dbo].[Appointment](
	[AppointID] [int] IDENTITY(1000,2) NOT NULL,
	[fname] [varchar](50) NOT NULL,
	[lname] [varchar](50) NOT NULL,
	[mname] [varchar](50) NOT NULL,
	[reason] [varchar](250) NOT NULL,
	[appointdate] [date] NOT NULL,
	[remarks] [varchar](50) NULL,
	[Status] [varchar](50) NULL,
	[userID] [int] NULL

	  FOREIGN KEY (userID) REFERENCES user_accounts(userID)
);

drop table patient_records;

select * from patient_records;
select * from patient_details;
select * from vaccine;

SELECT patient_details.*, patient_records.*, vaccine.*
FROM ((patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID)
INNER JOIN vaccine ON patient_records.vacID = vaccine.vacID) WHERE patient_details.patient_detID = 2000020;

SELECT patient_records.cat_expo, vaccine.remark, patient_records.records_added
FROM ((patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID)
INNER JOIN vaccine ON patient_records.vacID = vaccine.vacID) wHERE patient_details.patient_detID = 2000020 and vaccine.vacID = 111117;

SELECT patient_details.fname, patient_details.lname, patient_details.patient_detID, patient_records.*, vaccine.*
FROM ((patient_records 
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID)
INNER JOIN vaccine ON patient_records.vacID = vaccine.vacID) WHERE patient_details.patient_detID = 2000023 AND vaccine.vacID = 111126;

SELECT * FROM vaccine WHERE vacID = 111126

ALTER TABLE vaccine
ADD CONSTRAINT patientdetID
FOREIGN KEY (patientdetID)
REFERENCES patient_details(patient_detID);

alter table patient_records
add Date_Added date;

alter table patient_records
add records_added date;

Select vaccine.vacID
FROM patient_records

UPDATE patient_records
SET date_expo = '10/23/2001', place_expo = '', type_expo = '', source_expo = '', cat_expo = '', post_expo = '', washing_bite = '', date_rig = ''
WHERE patientID = '100014'

SELECT patient_details.*, patient_records.patientID
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID

SELECT patient_details.*, patient_records.patientID
FROM patient_details
INNER JOIN patient_records ON patient_records.patient_detID = patient_details.patient_detID

DELETE FROM patient_records WHERE vacID IN (SELECT vacID FROM patient_records WHERE patient_detID = 2000023) AND patient_records IN (SELECT patient_records FROM patient_records WHERE patient_detID = 2000023)

SELECT vacID FROM patient_records WHERE patient_detID = 2000023

DELETE FROM vaccine 
WHERE vacID IN (SELECT vacID FROM patient_records WHERE patient_detID = 2000025)

select * from patient_records;
select * from patient_details;		
select * from vaccine;

ALTER TABLE patient_records
ALTER COLUMN date_expo date NULL;

DELETE FROM patient_records;
DELETE FROM patient_details;
DELETE FROM vaccine;

Delete from patient_records where patient_detID =  2000026
delete from vaccine where patientdetID = 2000026
delete from patient_details where patient_detID = 2000026

ALTER TABLE Appointment
ADD CONSTRAINT patient_detID
FOREIGN KEY (patient_detID)
REFERENCES patient_details(patient_detID);

ALTER TABLE Appointment
ADD CONSTRAINT userID
FOREIGN KEY (userID)
REFERENCES user_accounts(userID);

select * from patient_records
select * from patient_details

select * from Appointment

delete from appointment

select* from user_accounts

select * from vaccine
Drop table vaccine;
drop table patient_details
ALTER TABLE 
DROP CONSTRAINT patientdetID;

SELECT patient_details.fname, patient_details.lname, patient_details.patient_detID, patient_records.*
        FROM patient_records 
        INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
        WHERE patient_records.patient_detID = 2000003

SELECT patient_details.fname, patient_details.lname, patient_details.patient_detID, patient_records.*
        FROM patient_records 
        INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
        WHERE patient_records.patient_detID = 2000003;

Select * from Appointment

Alter table Appointment
Add Symptoms varchar(100),
Accident_date date	

Alter table Appointment
drop Column Symptoms, Accident_date;

Delete from Appointment where AppointID = 1032



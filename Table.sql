
-- Create Table Professor

Create Table Professor
(
  ssn numeric(9) not null primary key,
  name varchar(40) not null,
  phone_number_area numeric(3) not null,
  phone_number_digit numeric(7) not null,
  sex varchar(10) not null,
  title enum('Dr.','Mr.','Ms.','Mrs.') not null,
  salary numeric(10) not null,
  addr_street varchar(40) not null,
  addr_city varchar(30) not null,
  addr_state varchar(2) not null,
  addr_zipcode numeric(6) not null
);

-- Create Table Degree
Create Table Degree
(
  prof_id numeric(9) not null foreign key references Professor(ssn),
  degree_name varchar (20) not null
);

-- Create table student
Create Table Student
(
  cwid numeric(10) not null primary key,
  first_name varchar(20) not null,
  last_name varchar(20) not null,
  address varchar(60) not null,
  major numeric(5) not null foreign key references Department(d_id),
);

-- Create Minor Major Table

Create Table Minor_Major
(

  stu_id numeric(10) not null foreign key references Student(cwid),
  minor_major_id numeric(5) not null foreign key references Department(d_id)

);

-- Create table Department
Create Table Department
(
  d_id numeric(5) not null primary key,
  name varchar(20) not null,
  phone_number numeric(10) not null,
  location varchar(60) not null,
  chair_prof_id numeric(9) not null foreign key references Professor(ssn)

);

-- Create table Course
Create Table Course
(
  c_id varchar(10) not null primary key,
  title varchar(50) not null,
  textbook varchar(60) not null,
  units int not null,
  department_id numeric(5) not null foreign key references Department(d_id)

);

-- create table Prerequisite
Create Table Prerequisite
(
  course_id varchar(10) not null foreign key references Course(c_id),
  pre_course_id varchar(10) foreign key references Course(c_id)
);

-- create table Section
Create Table Section
(
  s_id numeric(5) not null primary key,
  class_room varchar(10) not null,
  amount_of_seat int not null,
  meeting_day varchar(20) not null,
  beginning_day varchar(20) not null,
  ending_day varchar(20) not null,
  prof_id numeric(9) not null foreign key references Professor(ssn),
  course_id varchar(10) not null foreign key references Course(c_id)
);

-- create table Enrollment
Create Table Enrollment
(
  grade enum('A','A-','B+','B','B-','C+','C','C-','D+','D','D-','F') not null,
  section_id not null foreign key references Section(s_id),
  stu_id not null foreign key references Student(cwid)
);


-- Create Table Professor

Create Table Professor
(
  prof_id numeric(9) not null primary key,
  prof_name varchar(40) not null,
  prof_phone_number_area numeric(3) not null,
  prof_phone_number_digit numeric(7) not null,
  prof_sex varchar(10) not null,
  prof_title enum('Dr.','Mr.','Ms.','Mrs.') not null,
  prof_salary numeric(10) not null,
  prof_addr_street varchar(40) not null,
  prof_addr_city varchar(30) not null,
  prof_addr_state varchar(2) not null,
  prof_addr_zipcode numeric(6) not null
);

-- Create Table Degree
Create Table Degree
(
  degree_prof_id numeric(9) not null foreign key references Professor(prof_id),
  degree_name varchar (20) not null
);

-- Create table student
Create Table Student
(
  stu_cwid numeric(10) not null primary key,
  stu_first_name varchar(20) not null,
  stu_last_name varchar(20) not null,
  stu_address varchar(60) not null,
  stu_phone_number numeric(10) not null,
  stu_major_dep_id numeric(5) not null foreign key references Department(dep_id),
);

-- Create Minor Major Table

Create Table Minor
(

  minor_stu_cwid numeric(10) not null foreign key references Student(stu_cwid),
  minor_dep_id numeric(5) not null foreign key references Department(dep_id)

);

-- Create table Department
Create Table Department
(
  dep_id numeric(5) not null primary key,
  dep_name varchar(20) not null,
  dep_phone_number numeric(10) not null,
  dep_location varchar(60) not null,
  dep_chair_prof_id numeric(9) not null foreign key references Professor(prof_id)

);

-- Create table Course
Create Table Course
(
  course_id varchar(10) not null primary key,
  course_title varchar(50) not null,
  course_textbook varchar(60) not null,
  course_units int not null,
  course_dep_id numeric(5) not null foreign key references Department(dep_id)

);

-- create table Prerequisite
Create Table Prerequisite
(
  upper_course_id varchar(10) not null foreign key references Course(course_id),
  lower_course_id varchar(10) foreign key references Course(course_id)
);

-- create table Section
Create Table Section
(
  section_id numeric(5) not null primary key,
  section_class_room varchar(10) not null,
  section_amount_of_seat int not null,
  section_meeting_day varchar(20) not null,
  section_beginning_day varchar(20) not null,
  section_ending_day varchar(20) not null,
  section_prof_id numeric(9) not null foreign key references Professor(prof_id),
  section_course_id varchar(10) not null foreign key references Course(course_id)
);

-- create table Enrollment
Create Table Enrollment
(
  enroll_grade enum('A','A-','B+','B','B-','C+','C','C-','D+','D','D-','F') not null,
  enroll_section_id not null foreign key references Section(section_id),
  enroll_stu_cwid not null foreign key references Student(stu_cwid)
);


-- Create Table Professor

Create Table Professor
{
  (ssn numeric(9) not null primary key,
  first_name varchar(20) not null,
  last_name varchar(20) not null,
  phone_number_area numeric(3) not null,
  phone_number_digit numeric(7) not null,
  sex enum('Male','Female') not null,
  title enum('Dr.','Mr.','Ms.','Mrs.') not null,
  salary numeric(10) not null,
  college_degree varchar(10) not null,
  addr_street varchar(40) not null,
  addr_city varchar(30) not null,
  addr_state varchar(2) not null,
  addr_zipcode numeric(6) not null
};

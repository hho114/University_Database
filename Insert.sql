-- Insert 3 Professor
Insert Into Professor(ssn, name, phone_number_area, phone_number_digit, sex, title, salary, addr_street, addr_city, addr_state,addr_zipcode)
Values
(122039736, "Bein Doina",657,2784822,"Female","Dr.",100000, "800 N State College Blvd", "Fullerton", "CA", 92831),
(123034739, "Wang Shawn",657,2787258,"Male","Dr.",100000, "800 N State College Blvd", "Fullerton", "CA", 92831),
(124033735, "Alfonso Agnew",657,2787021,"Male","Mr.",100000, "800 N State College Blvd", "Fullerton", "CA", 92831);

-- Insert Professor degree
Insert Into DEGREE(prof_id, degree_name)
Values
(122039736, "PhD Computer Science"),
(122039736, "MS Computer Science"),
(122039736, "BS Computer Science"),
--
(123034739, "PhD Computer Science"),
(123034739, "MS Computer Science"),
(123034739, "BS Computer Science"),
--
(124033735, "MS Math"),
(124033735, "BS Physics");

-- Insert 2 Department
Insert Into Department(d_id, name, phone_number, location, chair_prof_id)
Values
(12345, "Computer Science", 6572783700, "CS 522",122039736),
(67890, "Mathematics", 6572785987, "MH 154", 124033735);

--Insert 4 Course

Insert Into Course(c_id,title,textbook,units,d_id)
Values
("CPSC 332","File Structures and Database Systems",3,12345),
("CPSC 351","Operating Systems Concepts",3,12345),
("Math 338","Stats Applied to Natural Sciences",4,67890),
("CPSC 335","Algorithm Engineering",3,12345);


--Insert Prerequisite Course
Insert Into Prerequisite(c_id,pre_course_id)
Values
("CPSC 332", "CPSC 131"),
("CPSC 351", "CPSC 131"),
("CPSC 335", "CPSC 301"),
("Math 338", "Math 150B");

-- Insert 6 Sections
Insert Into Section(s_id, class_room, amount_of_seat, meeting_day, beginning_day, ending_day, prof_id, c_id)
Values
(13661,"E 202",30,"MoWe 4:00PM - 5:15PM","01/19/2019", "05/10/2019",123034739,"CPSC 332"),
(13887,"EC 109",30,"MoWe 2:30PM - 3:45PM","01/19/2019", "05/10/2019",123034739,"CPSC 332"),
--
(13642,"CS 102A",30,"MoWe 7:00PM - 8:15PM","01/19/2019", "05/10/2019",122039736,"CPSC 351"),
(13374,"E 202",50,"MoWe 1:00PM - 2:15PM","01/19/2019", "05/10/2019",122039736,"CPSC 335"),
--
(18333,"MH 491",30,"TuTh 8:30AM - 9:45AM","01/19/2019", "05/10/2019",124033735,"Math 338"),
(18446,"MH 452",30,"TuTh 10:00AM - 10:50AM","01/19/2019", "05/10/2019",124033735,"Math 338");


-- Insert 8 Students
Insert Into Student(cwid,first_name, last_name,address,major)
Values
(123456789,"Alex","Ho","234 S Harmon st, Santa Ana, CA 92703", 12345 ),
(234567891,"John","Smith","123 N Kingkong st, Fullerton, CA 92831", 12345 ),
(345678912,"Julia","Coco","456 N BTS Ave, Westminter, CA 92704", 12345 ),
(456789123,"Bryan","Paul","234 S Harbor Blvd, Santa Ana, CA 92704", 12345 ),
(567891234,"Jay","Son","567 S Harmon st, Fullerton, CA 92831", 12345 ),
(678912345,"Kai","Nguyen","4801 W First st, Santa Ana, CA 92703", 67890 ),
(789123456,"Linda","Kathy","433 S Harmon st, Fullerton, CA 92831", 67890 ),
(891234567,"Laura","Kimmy","897 W Century st, Costa Mesa, CA 92704", 67890 );


-- Insert Minor_Major
Insert Into Minor_Major(stu_id,minor_major_id)
Values
(123456789,67890),
(234567891,67890),
(345678912,67890),
(456789123,67890),
(789123456,12345),
(891234567,12345);

-- Insert 20 Enrollments
Insert Into Enrollment (grade,s_id,stu_id)
Values
('A',13661,123456789),('B',13642,123456789),('A',13374,123456789),('B',18333,123456789),
('C',13661,234567891),('D',13642,234567891),('A',13374,234567891),('B',18333,234567891),
('C',13661,345678912),('B',13642,345678912),('B',13374,345678912),('A',18333,345678912),
('B',13887,456789123),('A',13374,456789123),('A',13661,456789123),('B',18446,456789123),
('A',13887,567891234),('C',13374,567891234),('D',13661,678912345),('A',18446,678912345),
('B',13887,789123456),('A',18446,789123456),('A',13661,891234567),('B',18446,891234567);

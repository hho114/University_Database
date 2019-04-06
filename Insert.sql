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
Insert Into Student(cwid,first_name, last_name,address,major,minor)
Values
();


-- TO DO

/* CS Minors */
INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (98765, 3579514879);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (98765, 7890286981);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (98765, 2486309715);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (98765, 7093214568);

/* ECP Minors */
INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (12345, 1837492844);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (12345, 9872589514);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (12345, 1598523575);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (12345, 1478963250);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (12345, 5812301578);

INSERT INTO MINORS(Minor_Dept, Minor_Student_CWID)
VALUES (12345, 5872365470);

/* 30 Enrollments */
INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1837492844, 74937, "CPSC-131", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1837492844, 15853, "EGCP-280", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1837492844, 96241, "EGCP-470", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (9872589514, 23802, "CPSC-131", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (9872589514, 15853, "EGCP-280", 'C+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (9872589514, 96241, "EGCP-470", 'B');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1598523575, 71157, "CPSC-311", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1598523575, 15853, "EGCP-280", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1598523575, 98723, "EGCP-470", 'B-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1478963250, 65487, "CPSC-311", 'A-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1478963250, 15853, "EGCP-280", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (1478963250, 96241, "EGCP-470", 'C-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (5812301578, 23802, "CPSC-131", 'C-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (5812301578, 15853, "EGCP-280", 'B-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (5812301578, 98723, "EGCP-470", 'A-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (5872365470, 74937, "CPSC-131", 'B-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (5872365470, 15853, "EGCP-280", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (5872365470, 98723, "EGCP-470", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (3579514879, 85390, "CPSC-311", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (3579514879, 15853, "EGCP-280", 'A-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (3579514879, 96241, "EGCP-470", 'C+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (7890286981, 71157, "CPSC-311", 'B-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (7890286981, 15853, "EGCP-280", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (7890286981, 98723, "EGCP-470", 'A-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (2486309715, 23802, "CPSC-131", 'B-');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (2486309715, 15853, "EGCP-280", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (2486309715, 96241, "EGCP-470", 'A');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (7093214568, 71157, "CPSC-311", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (7093214568, 15853, "EGCP-280", 'B+');

INSERT INTO ENROLLMENT(Enrollment_CWID, Enrollment_Section_Number, Enrollment_Course_Number, Grade)
VALUES (7093214568, 98723, "EGCP-470", 'B-');

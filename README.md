#CSUF-CPSC-335-Project

#University Database

Team Member:

Alex Ho hho114@csu.fullerton.edu

Marco Chavez mchavez25@csu.fullerton.edu

Caesar Mier caesarmier@csu.fullerton.edu

[Link to team website project ](http://bit.ly/2Pe7P4u "CPSC 332 Project")


Project Description

[Project Assignment](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-2.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-3.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-4.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-5.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-6.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-7.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-8.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-9.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-10.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-11.png)

[Project Design](https://github.com/hho114/CSUF-CPSC-332-Project/report/report-12.png)




Our project uses the following queries to scan the database for relevant information.

### Professor

* Part A)
```sql
SELECT course_title, section_class_room, section_meeting_day, section_beginning_day, section_ending_day
 FROM Course, Section, Professor
 WHERE prof_id = '$prof_ssn' AND prof_id = section_prof_id AND course_id = section_course_id 
```

* Part B)
```sql
SELECT DISTINCT enroll_grade, course_title, Count(enroll_grade) as 'Count'
 FROM Course , Section , Enrollment
 WHERE course_id = section_course_id
 AND enroll_section_id = section_id
 AND course_id = '$course_id' AND section_id = '$section_id' GROUP BY enroll_grade
```

### Students

* Part A)
```sql
SELECT course_id, course_title, section_id, section_class_room, section_meeting_day,
		section_beginning_day, section_ending_day, (section_amount_of_seat-COUNT(enroll_stu_cwid)) as 'num_enrolled'

	FROM Course, Enrollment, Section
	WHERE enroll_section_id = section_id
	AND course_id = section_course_id
	AND course_id = '$course_id' GROUP BY section_id
```

* Part B)
```sql
SELECT course_title, enroll_grade
	FROM Enrollment, Course, Section, Student
	WHERE  stu_cwid = enroll_stu_cwid AND enroll_section_id = section_id
  AND section_course_id = course_id AND enroll_stu_cwid =  '$stu_id'
```


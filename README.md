# Graduation-Thesis-Topic-Selection-System
## Background:

In order to digitize the management of school graduation theses and address issues such as inconvenient and slow information transmission in the past, such as students being unable to submit thesis-related documents due to their absence from campus, and the tedious task of individually notifying students by colleges or supervisors to arrange work. This system enables network-based management, facilitating teachers and students, and improving work efficiency and effectiveness.

## Functional Module Division:

This system can be divided into three modules: Administrator module, Student module, and Teacher module.

1. Administrator module:

 a. Login management: Provides a login interface for administrator users, matching the entered username and password with the username and password of administrators in the system. If the match is successful, the administrator can access the administrator interface. If the match fails, the administrator is prompted with login failure or other error messages.

 b. Student user management: Provides the administrator with an interface to manage student users, displaying the students in the system in a list or other format. For each specific student, their information can be viewed and modified, and students can also be deleted. When deleting a student, tuples in other tables that reference that student in the database should also be deleted to ensure data consistency.

 c. Teacher user management: Provides the administrator with an interface to manage teacher users, displaying the teachers in the system in a list or other format. For each specific teacher, their information can be viewed and modified, and teachers can also be deleted. When deleting a teacher, tuples in other tables that reference that teacher in the database should also be deleted to ensure data consistency.

 d. Student topic viewing: Allows administrators to view the topics chosen by students.

3. Teacher module:
   
(1) Login management: Provides a login interface for teacher users, matching the entered username and password with the username and password of teachers in the system. If the match is successful, the teacher can access the teacher interface. If the match fails, the teacher is prompted with login failure or other error messages.

(2) Teacher personal information management: Provides teachers with the functionality to modify their personal information.

(3) Thesis topic management: Provides teachers with an interface to propose graduation thesis topics. In this interface, teachers need to provide information about the topic, such as the topic title, category (practical or theoretical), target major, and topic requirements.

(4) Teacher confirmation of student selection: Teachers confirm the selection of students based on their candidature.

3. Student module:
   
(1) Login management: Provides a login interface for student users, matching the entered username and password with the username and password of students in the system. If the match is successful, the student can access the student interface. If the match fails, the student is prompted with login failure or other error messages.

(2) Personal information management: Provides students with the functionality to modify their personal information.

(3) Student topic management: Students can view the content of available topics and make topic selections.

(4) Viewing student topic selection results: Students can view the topics that have been confirmed by the teacher for their selection.







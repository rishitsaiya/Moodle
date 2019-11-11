# Moodle
A college Course management System

We haven’t bifurcated the frontend and backend files as we have implemented HTML5 and CSS in PHP files itself. Here PHP files also possess the backend code.

• addFaculty.php, administrator_addfaculty.php: These php files add the faculty after registration to the database.

• addStudent.php, administrator_addstudent.php: These php files add the student after registration to the database.

• home.php: This file is student’s dashboard page.

• login.php: This file is for login portal.

• logout.php: This file is for logout. Here we have included session out, so that after logging out, user would not like to get redirected back to the last page where it left off.

• notification.php: This file is for adding notification from teacher to database. 

• studentprofile.php: This file is to show the personal details of the student. It’s like your own profile.

• teacher.php: This file is for the instructor’s dashboard.

• teacherlab.php: This file is for showing the details of the files which have been uploaded by the student. This is mainly for the purpose of instructor.

• validation.php: This file is used to check whether the user logging in is a student or a faculty of college.

• administratorhome.php: This file is for the dashboard of administrator. Since it has different functionalities from the students and instructors’, it had to be created separately.

• course_i.php: These are the dashboard pages of the respective course_i. Here i = 1, 2, 3.

• fileopen.php: This file is for opening the submitted student’s assignments/projects files, tar, and zip.

• highmarks_lowatt.php: This file redirects us to the details of students having high marks (>=80%) and low attendance (<=80%). This is represented in the form of a table.

• lab.php, upload.php: These files have been used for a page whereby the students will upload their assignments & projects.

These are the basic details of the files in the source code.
Although, the software is very user friendly, this are the guidelines which will be useful to use the software.

If you are a student, you will have to get registered by the administrator for the courses you want to enroll for. After signing in, you will be redirected to your dashboard, where you will get to see all the courses, you have enrolled for. Further more, for the assignment and project submission, you have to further go into each course.
If you are an instructor, you will have to get registered by the administrator for the courses you want to instruct for. After signing in, you will be redirected to your dashboard, where you will get to see all the courses, you are instrcting. Further more, you will also get the details of the projects & asssignments submitted by the students with corresponding time stamps.
If you are an administrator, you will have all access to view all the instructors' and students' details and their courses involvement as well. Further more, you will able to add student, instructor for a particular course as well.

This basically sums up all the basic information about the source code files and usage of the software.

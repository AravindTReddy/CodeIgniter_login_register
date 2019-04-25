###################
CodeIgniter Login & Registration 
###################

*******************
login form
*******************
For login page we will check student’s email and password are valid then will redirect on dashboard method.

*******************
registration form
*******************
Before inserting Students data inside database we will check student email id is already exists then show error message
“User already exists” if not already exists then store information inside database.

*******************
Database
*******************
We will use student table to save data after register and login.
This is student table structure:
Table Name : student
student_id	int primary key auto_increment
name	char(50)
email	varchar(100)
password	varchar(100)


*******************
Tools
*******************
LAMP stack (PHP7), CodeIgniter-3.1.10, Atom.

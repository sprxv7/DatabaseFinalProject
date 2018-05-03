# DatabaseFinalProject
CS 3380

	Michael Buikus 
	Spenser Rook 
	Song Vu Nguyen
  
  ***
  
Description

   Our application maintains student records for DataBase University. On the front page, located at [http://sprxv7.epizy.com](http://sprxv7.epizy.com/), you will find a list of all the students that have already graduated from this University. We will assume that each student can have only one major, and if they don't declare a major, it going to automatically default to General Bussiness. Because this is a database to maintain a record of student who already gratuate, the gratuation year only go from 2010 up to the current year, 2018. The purpose of this database is to manage the University's gratuated students by allowing the users to search, add, edit, and remove a student at the University.
  
  ***
  
Schema

	Table -- studentYr
	ID: INT(11) - Primary Key - Not Null - Auto Increment
	lastName: Char(15) - Not Null 
	firstName: Char(15) - Not Null 
	major: Char(25) - Not Null 
	gradYear: INT(4) - Not Null
        
	Table -- colleges
	major: Char(32) - Primary Key - Not Null
	college: Char(32) - Not Null
        
  ***
  
ERD
  ![alt text](https://github.com/sprxv7/DatabaseFinalProject/blob/master/ERD.jpg "ERD Image")
  
  ![alt text](https://github.com/sprxv7/DatabaseFinalProject/blob/master/RelationshipDiagram.jpg "relationship")
  
  ***
  
CRUD
    
You will have the capabilities of adding (CREATE) new students along with their major and graduation date. Last name and first name is require to add a student with the default major and gratuation year be General Business and 2010. There is also a button to delete (DELETE) or edit (UPDATE) a record that will take you to a new page to modify their name, major, and graduation years if needed. Lastly, from the front page, you will also have the option to search (READ) for certain students. Our search will take you to a new page where you can use different criteria to locate the student within Database University.

***

Video URL
  [https://www.youtube.com/watch?v=qgmDrZttk5g](https://www.youtube.com/watch?v=qgmDrZttk5g)

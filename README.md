# DatabaseFinalProject
CS 3380
  Michael Buikus
  Spenser Rook
  Song Vu Nguyen
  
  ***
  
Description
  Our application maintains student records for DataBase University. On the front page, located at <link>, you will find a list of all the students that have graduated from this University. You will have the capabilities of adding new students along with their major and graduation date. There is also a button to edit a record that will take you to a new page to modify their name, major, and graduation years if needed. Lastly, from the front page, you will also have the option to search for certain students. Our search will take you to a new page where you can use different criteria to locate the student within Database University.
  ***
Schema
  Table: studentYr
        ID: INT(11) - Primary Key - Not Null - Auto Increment
        lastName: Char(15) - Not Null
        firstName: Char(15) - Not Null
        major: Char(25) - Not Null
        gradYear: INT(4) - Not Null
        
  Table: colleges
        major: Char(32) - Primary Key - Not Null
        college: Char(32) - Not Null
  ***
ERD
  <Entity relationship Diagram>
  
  ***
  
CRUD
    
***

Video URL
  <URL>

CREATE TABLE studentYr (
    ID INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    lastName CHAR(15) NOT NULL,
    firstName CHAR(15) NOT NULL,
    major CHAR(25) NOT NULL PRIMARY KEY,
    gradYear INT(4) NOT NULL,
    FOREIGN KEY (major) REFERENCES colleges (major)
)

INSERT INTO studentYr VALUES ('Doe','John','Mathematics', 2017);
INSERT INTO studentYr VALUES ('Smith','Carla','Accounting', 2010);
INSERT INTO studentYr VALUES ('Jones','Jessica','Marketing',2013);
INSERT INTO studentYr VALUES ('Fox','Michael','Counseling',2015);
INSERT INTO studentYr VALUES ('Buikus','Austin','Mechanical Engineering',2013);
INSERT INTO studentYr VALUES ('Miller','Brian','Management',2016);
INSERT INTO studentYr VALUES ('Nguyen','Sara','Biology',2016);
INSERT INTO studentYr VALUES ('Rook','Roy','Physics',2011);
INSERT INTO studentYr VALUES ('Smith','Joshua','General',2012);
INSERT INTO studentYr VALUES ('Brown','Grace','Social Work',2017);
INSERT INTO studentYr VALUES ('Hirsh','Amber','Early Childhood Education',2010);
INSERT INTO studentYr VALUES ('Williams','Harry','Civil Engineering',2014);
INSERT INTO studentYr VALUES ('Johnson','Logan','Aerospace Engineering',2015);
INSERT INTO studentYr VALUES ('Jones','Tiffany','Political Science',2011);
INSERT INTO studentYr VALUES ('Davis','Theresa','Philosophy',2017);
INSERT INTO studentYr VALUES ('Wilson','Roger','English',2018);
INSERT INTO studentYr VALUES ('Murphy','Douglas','Special Education',2015);
INSERT INTO studentYr VALUES ('White','John','German',2014);
INSERT INTO studentYr VALUES ('Thompson','Aaron','Computer Science',2012);
INSERT INTO studentYr VALUES ('Robinson','Jerry','Nuclear Engineering',2014);
INSERT INTO studentYr VALUES ('Kelley','Patrick','Mathematics',2016);
INSERT INTO studentYr VALUES ('Diaz','Anthony','Sociology',2016);
INSERT INTO studentYr VALUES ('Price','Jessica','Early Childhood Education',2017);
INSERT INTO studentYr VALUES ('Hall','Rachel','Secondary Education',2018);
INSERT INTO studentYr VALUES ('Morris','Debra','Secondary Education',2011);
INSERT INTO studentYr VALUES ('Wood','Benjamin','Civil Engineering',2013);
INSERT INTO studentYr VALUES ('Pham','Jessia','Psychology',2014);
INSERT INTO studentYr VALUES ('White','George','Mathematics',2012);
INSERT INTO studentYr VALUES ('Doe','Kevin','Chemical Engineering',2011);
INSERT INTO studentYr VALUES ('Green','Steven','Chemistry',2014);
INSERT INTO studentYr VALUES ('Baker','Michael','French',2012);
INSERT INTO studentYr VALUES ('Harris','Spencer','Mechanical Engineering',2016);
INSERT INTO studentYr VALUES ('Hall','Sandra','Elemetnary Education',2017);
INSERT INTO studentYr VALUES ('Young','Eric','Social Work',2018);
INSERT INTO studentYr VALUES ('Smith','Karen','English',2015);
INSERT INTO studentYr VALUES ('Miller','Sara','Biology',2012);
INSERT INTO studentYr VALUES ('Robinson','Emily','Biological Engineering',2011);
INSERT INTO studentYr VALUES ('Williams','Natalie','Computer Science',2010);
INSERT INTO studentYr VALUES ('Edwards','James','Finance',2015);
COMMIT;

CREATE TABLE colleges (
    major char(32) PRIMARY KEY NOT NULL,
    college char(32) NOT NULL 
)

INSERT INTO colleges VALUES ('Biology', 'Arts & Science');
INSERT INTO colleges VALUES ('Chemistry', 'Arts & Science');
INSERT INTO colleges VALUES ('English', 'Arts & Science');
INSERT INTO colleges VALUES ('French', 'Arts & Science');
INSERT INTO colleges VALUES ('German', 'Arts & Science');
INSERT INTO colleges VALUES ('Mathematics', 'Arts & Science');
INSERT INTO colleges VALUES ('Philosophy', 'Arts & Science');
INSERT INTO colleges VALUES ('Physics', 'Arts & Science');
INSERT INTO colleges VALUES ('Political Science', 'Arts & Science');
INSERT INTO colleges VALUES ('Psychology', 'Arts & Science');
INSERT INTO colleges VALUES ('Sociology', 'Arts & Science');
INSERT INTO colleges VALUES ('Social Work', 'Arts & Science');
INSERT INTO colleges VALUES ('Accounting', 'Business');
INSERT INTO colleges VALUES ('Economics', 'Business');
INSERT INTO colleges VALUES ('Finance', 'Business');
INSERT INTO colleges VALUES ('General', 'Business');
INSERT INTO colleges VALUES ('Management', 'Business');
INSERT INTO colleges VALUES ('Marketing', 'Business');
INSERT INTO colleges VALUES ('Counseling', 'Education');
INSERT INTO colleges VALUES ('Early Childhood Education', 'Education');
INSERT INTO colleges VALUES ('Education Administration', 'Education');
INSERT INTO colleges VALUES ('Educational Technology', 'Education');
INSERT INTO colleges VALUES ('Elementary Education', 'Education');
INSERT INTO colleges VALUES ('Secondary Education', 'Education');
INSERT INTO colleges VALUES ('Special Education', 'Education');
INSERT INTO colleges VALUES ('Aerospace Engineering', 'Engineering');
INSERT INTO colleges VALUES ('Biological Engineering', 'Engineering');
INSERT INTO colleges VALUES ('Chemical Engineering', 'Engineering');
INSERT INTO colleges VALUES ('Civil Engineering', 'Engineering');
INSERT INTO colleges VALUES ('Computer Science', 'Engineering');
INSERT INTO colleges VALUES ('Electrical & Computer Engineering', 'Engineering');
INSERT INTO colleges VALUES ('Mechanical Engineering', 'Engineering');
INSERT INTO colleges VALUES ('Nuclear Engineering', 'Engineering');
COMMIT;

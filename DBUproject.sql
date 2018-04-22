CREATE TABLE 'studentYr' (
    'ID' INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'studentID' INT(7) NOT NULL,
    'lastName' CHAR(15) NOT NULL,
    'firstName' CHAR(15) NOT NULL,
    'major' CHAR(25) NOT NULL PRIMARY KEY,
    'gradYear' INT(4) NOT NULL,
    FOREIGN KEY ('major') REFERENCES 'colleges' ('major')
)

INSERT INTO 'studentYr' VALUES (396143,'Doe','John','Mathematics', 2017);
INSERT INTO 'studentYr' VALUES (397371,’Smith’,’Carla’,'Accounting', 2010);
INSERT INTO 'studentYr' VALUES (398599,’Jones’,’Jessica’,'Marketing',2013);
INSERT INTO 'studentYr' VALUES (399827,’Fox’,’Michael’,'Counseling',2015);
INSERT INTO 'studentYr' VALUES (401055,’Buikus’,’Austin’,'Mechanical Engineering',2013);
INSERT INTO 'studentYr' VALUES (402283,’Miller’,’Brian’,'Management',2016);
INSERT INTO 'studentYr' VALUES (403511,’Nguyen’,’Sara’,'Biology',2016);
INSERT INTO 'studentYr' VALUES (404739,’Rook’,’Roy’,'Physics',2011);
INSERT INTO 'studentYr' VALUES (405967,’Smith’,’Joshua’,'General',2012);
INSERT INTO 'studentYr' VALUES (407195,’Brown’,’Grace’,'Social Work',2017);
INSERT INTO 'studentYr' VALUES (408423,’Hirsh’,’Amber’,'Early Childhood Education',2010);
INSERT INTO 'studentYr' VALUES (409651,’Williams’,’Harry’,'Civil Engineering',2014);
INSERT INTO 'studentYr' VALUES (410879,’Johnson’,’Logan’,'Aerospace Engineering',2015);
INSERT INTO 'studentYr' VALUES (412107,’Jones’,’Tiffany’,'Political Science',2011);
INSERT INTO 'studentYr' VALUES (413335,’Davis’,’Theresa’,'Philosophy',2017);
INSERT INTO 'studentYr' VALUES (414563,’Wilson’,’Roger’,'English',2018);
INSERT INTO 'studentYr' VALUES (415791,’Murphy’,’Douglas’,'Special Education',2015);
INSERT INTO 'studentYr' VALUES (417019,’White’,’John’,'German',2014);
INSERT INTO 'studentYr' VALUES (418247,’Thompson’,’Aaron’,'Computer Science',2012);
INSERT INTO 'studentYr' VALUES (419475,’Robinson’,’Jerry’,'Nuclear Engineering',2014);
INSERT INTO 'studentYr' VALUES (420703,’Kelley’,’Patrick’,'Mathematics',2016);
INSERT INTO 'studentYr' VALUES (421931,’Diaz’,’Anthony’,'Sociology',2016);
INSERT INTO 'studentYr' VALUES (423159,’Price’,’Jessica’,'Early Childhood Education',2017);
INSERT INTO 'studentYr' VALUES (424387,’Hall’,’Rachel’,'Secondary Education',2018);
INSERT INTO 'studentYr' VALUES (425615,’Morris’,’Debra’,'Secondary Education',2011);
INSERT INTO 'studentYr' VALUES (426843,’Wood’,’Benjamin’,'Civil Engineering',2013);
INSERT INTO 'studentYr' VALUES (428071,’Pham’,’Jessia’,'Psychology',2014);
INSERT INTO 'studentYr' VALUES (429299,’White’,’George’,'Mathematics',2012);
INSERT INTO 'studentYr' VALUES (430527,’Doe’,’Kevin’,'Chemical Engineering',2011);
INSERT INTO 'studentYr' VALUES (431755,’Green’,’Steven’,'Chemistry',2014);
INSERT INTO 'studentYr' VALUES (432983,’Baker’,’Michael’,'French',2012);
INSERT INTO 'studentYr' VALUES (434211,’Harris’,’Spencer’,'Mechanical Engineering',2016);
INSERT INTO 'studentYr' VALUES (435439,’Hall’,’Sandra’,'Elemetnary Education',2017);
INSERT INTO 'studentYr' VALUES (436667,’Young’,’Eric’,'Social Work',2018);
INSERT INTO 'studentYr' VALUES (437895,’Smith’,’Karen’,'English',2015);
INSERT INTO 'studentYr' VALUES (439123,’Miller’,’Sara’,'Biology',2012);
INSERT INTO 'studentYr' VALUES (440351,’Robinson’,’Emily’,'Biological Engineering',2011);
INSERT INTO 'studentYr' VALUES (441579,’Williams’,’Natalie’,'Computer Science',2010);
INSERT INTO 'studentYr' VALUES (442807,’Edwards’,’James’,'Finance',2015);
COMMIT;

CREATE TABLE 'colleges' (
    'ID' INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'major' char(32) PRIMARY KEY NOT NULL,
    'college' char(32) NOT NULL DEFAULT ''
)

INSERT INTO 'colleges' VALUES ('Biology', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Chemistry', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('English', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('French', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('German', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Mathematics', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Philosophy', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Physics', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Political Science', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Psychology', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Sociology', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Social Work', 'Arts & Science');
INSERT INTO 'colleges' VALUES ('Accounting', 'Business');
INSERT INTO 'colleges' VALUES ('Economics', 'Business');
INSERT INTO 'colleges' VALUES ('Finance', 'Business');
INSERT INTO 'colleges' VALUES ('General', 'Business');
INSERT INTO 'colleges' VALUES ('Management', 'Business');
INSERT INTO 'colleges' VALUES ('Marketing', 'Business');
INSERT INTO 'colleges' VALUES ('Counseling', 'Education');
INSERT INTO 'colleges' VALUES ('Early Childhood Education', 'Education');
INSERT INTO 'colleges' VALUES ('Education Administration', 'Education');
INSERT INTO 'colleges' VALUES ('Educational Technology', 'Education');
INSERT INTO 'colleges' VALUES ('Elementary Education', 'Education');
INSERT INTO 'colleges' VALUES ('Secondary Education', 'Education');
INSERT INTO 'colleges' VALUES ('Special Education', 'Education');
INSERT INTO 'colleges' VALUES ('Aerospace Engineering', 'Engineering');
INSERT INTO 'colleges' VALUES ('Biological Engineering', 'Engineering');
INSERT INTO 'colleges' VALUES ('Chemical Engineering', 'Engineering');
INSERT INTO 'colleges' VALUES ('Civil Engineering', 'Engineering');
INSERT INTO 'colleges' VALUES ('Computer Science', 'Engineering');
INSERT INTO 'colleges' VALUES ('Electrical & Computer Engineering', 'Engineering');
INSERT INTO 'colleges' VALUES ('Mechanical Engineering', 'Engineering');
INSERT INTO 'colleges' VALUES ('Nuclear Engineering', 'Engineering');
COMMIT;

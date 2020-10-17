
-- -----------------------------------------------------
-- Table "language_center"."students"
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS "students" (
  "id_students"  SERIAL PRIMARY KEY,
  "students_reg_num" VARCHAR(6) NOT NULL,
  "students_fname" VARCHAR(45) NOT NULL,
  "students_lname" VARCHAR(45) NOT NULL);


-- -----------------------------------------------------
-- Table "language_center"."teachers"
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS "teachers" (
  "id_teachers" SERIAL PRIMARY KEY,
  "teachers_fname" VARCHAR(45) NOT NULL,
  "teachers_lname" VARCHAR(45) NOT NULL);


-- -----------------------------------------------------
-- Table "language_center"."courses"
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS "courses" (
  "Id_courses"  SERIAL PRIMARY KEY,
  "courses_name" VARCHAR(45) NOT NULL,
  "students_id_students"  INTEGER NOT NULL,
  "teachers_id_teachers"  INTEGER NOT NULL);



--------------------------------------------------------
-- Foreign keys
-- -----------------------------------------------------
ALTER TABLE "courses" ADD FOREIGN KEY (students_id_students) REFERENCES "students" ("id_students");
ALTER TABLE "courses" ADD FOREIGN KEY (teachers_id_teachers) REFERENCES "teachers" ("id_teachers");


-- -----------------------------------------------------
-- Adding users
-- -----------------------------------------------------
ALTER TABLE "students"
ADD COLUMN user_name VARCHAR(45) NOT NULL,
ADD COLUMN user_pass VARCHAR(225) NOT NULL,
ADD COLUMN user_level VARCHAR(1) NOT NULL DEFAULT 1;

ALTER TABLE teachers
ADD COLUMN user_name VARCHAR(45) NOT NULL,
ADD COLUMN user_pass VARCHAR(225) NOT NULL,
ADD COLUMN user_level VARCHAR(1) NOT NULL DEFAULT 1;

-- -----------------------------------------------------
-- altering tables
-- -----------------------------------------------------
ALTER TABLE "courses"
RENAME COLUMN "Id_courses" TO "id_courses";

ALTER TABLE students
ALTER COLUMN  user_pass TYPE VARCHAR(255);

ALTER TABLE teachers
ALTER COLUMN  user_pass TYPE VARCHAR(255);

ALTER TABLE teachers
ALTER COLUMN user_level SET DEFAULT 2;

-- -----------------------------------------------------
-- inserting data
-- -----------------------------------------------------
  "students_reg_num" VARCHAR(6) NOT NULL,
  "students_fname" VARCHAR(45) NOT NULL,
  "students_lname" VARCHAR(45) NOT NULL);


  "id_teachers" SERIAL PRIMARY KEY,
  "teachers_fname" VARCHAR(45) NOT NULL,
  "teachers_lname" VARCHAR(45) NOT NULL);

  "Id_courses"  SERIAL PRIMARY KEY,
  "courses_name" VARCHAR(45) NOT NULL,
  "students_id_students"  INTEGER NOT NULL,
  "teachers_id_teachers"  INTEGER NOT NULL);

  INSERT INTO students
  (students_reg_num,
   students_fname,
   students_lname,
   user_name,
   user_pass,
   user_level)
  VALUES
  ('1',
  'Eduardo',
  'Huamani',
  'ehuamani',
  'ehuamani',
  DEFAULT);

  INSERT INTO students
  (students_reg_num,
   students_fname,
   students_lname,
   user_name,
   user_pass,
   user_level)
  VALUES
  ('2',
  'Maria',
  'Vasquez',
  'mvasquez',
  'mvasquez',
  DEFAULT);
  
  
  INSERT INTO teachers
  (id_teachers,
   teachers_fname,
   teachers_lname,
   user_name,
   user_pass,
   user_level)
  VALUES
  ('1',
  'Renzo',
  'Arriaran',
  'rarriaran',
  'rarriaran',
  DEFAULT);
  
  
  INSERT INTO courses
  (courses_name,
   students_id_students,
   teachers_id_teachers )
  VALUES
  ('Basic English 1',
  1,
  1);
 
  INSERT INTO courses
  (courses_name,
   students_id_students,
   teachers_id_teachers )
  VALUES
  ('Basic English 2',
  2,
  1);

  UPDATE teachers
  SET user_level = 2
  WHERE id_teachers = 1;
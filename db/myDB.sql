
-- -----------------------------------------------------
-- Table "language_center"."students"
-- -----------------------------------------------------
DROP TABLE IF EXISTS students CASCADE;
CREATE TABLE IF NOT EXISTS "students" (
  "id_students"  SERIAL PRIMARY KEY,
  "students_reg_num" VARCHAR(6) NOT NULL,
  "students_fname" VARCHAR(45) NOT NULL,
  "students_lname" VARCHAR(45) NOT NULL,
  "students_user_name" VARCHAR(45) NOT NULL,
  "students_user_pass" VARCHAR(255) NOT NULL,
  "students_user_level" VARCHAR(1) NOT NULL DEFAULT 1);


-- -----------------------------------------------------
-- Table "language_center"."teachers"
-- -----------------------------------------------------
DROP TABLE IF EXISTS teachers CASCADE;
CREATE TABLE IF NOT EXISTS "teachers" (
  "id_teachers" SERIAL PRIMARY KEY,
  "teachers_fname" VARCHAR(45) NOT NULL,
  "teachers_lname" VARCHAR(45) NOT NULL,
  "teachers_user_name" VARCHAR(45) NOT NULL,
  "teachers_user_pass" VARCHAR(255) NOT NULL,
  "teachers_user_level" VARCHAR(1) NOT NULL DEFAULT 2);


-- -----------------------------------------------------
-- Table "language_center"."courses"
-- -----------------------------------------------------
DROP TABLE IF EXISTS courses CASCADE;
CREATE TABLE IF NOT EXISTS "courses" (
  "id_courses"  SERIAL PRIMARY KEY,
  "courses_name" VARCHAR(45) NOT NULL,
  "courses_section" VARCHAR(3) NOT NULL,  
  "teachers_id_teachers"  INTEGER NOT NULL);

-- -----------------------------------------------------
-- Table "language_center"."students_has_courses"
-- -----------------------------------------------------
DROP TABLE IF EXISTS students_has_courses CASCADE;
CREATE TABLE IF NOT EXISTS "students_has_courses"(
  "students_id_students" INTEGER NOT NULL,
  "courses_id_courses" INTEGER NOT NULL);
  
--------------------------------------------------------
-- Foreign keys
-- -----------------------------------------------------
ALTER TABLE "courses" ADD FOREIGN KEY (teachers_id_teachers) REFERENCES "teachers" ("id_teachers") ON DELETE CASCADE;
ALTER TABLE "students_has_courses" ADD FOREIGN KEY (students_id_students) REFERENCES "students" ("id_students") ON DELETE CASCADE;
ALTER TABLE "students_has_courses" ADD FOREIGN KEY (courses_id_courses) REFERENCES "courses" ("id_courses") ON DELETE CASCADE;

-- -----------------------------------------------------
-- inserting data
-- -----------------------------------------------------
 

  INSERT INTO students
  (students_reg_num,
   students_fname,
   students_lname,
   students_user_name,
   students_user_pass,
   students_user_level)
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
   students_user_name,
   students_user_pass,
   students_user_level)
  VALUES
  ('2',
  'Maria',
  'Vasquez',
  'mvasquez',
  'mvasquez',
  DEFAULT);

  INSERT INTO students
  (students_reg_num,
   students_fname,
   students_lname,
   students_user_name,
   students_user_pass,
   students_user_level)
  VALUES
  ('3',
  'Matias',
  'Huamani',
  'mhuamani',
  'mhuamani',
  DEFAULT);
  
  
  INSERT INTO teachers
  (teachers_fname,
   teachers_lname,
   teachers_user_name,
   teachers_user_pass,
   teachers_user_level)
  VALUES
  ('Renzo',
  'Arriaran',
  'rarriaran',
  'rarriaran',
  DEFAULT);
  
  INSERT INTO teachers
  (teachers_fname,
   teachers_lname,
   teachers_user_name,
   teachers_user_pass,
   teachers_user_level)
  VALUES
  ('Brigit',
  'De la cruz',
  'bdelacruz',
  'bdelacruz',
  DEFAULT);
  
  
  INSERT INTO courses
  (courses_name,
   courses_section,
   teachers_id_teachers )
  VALUES
  ('Basic English 1',
  '101',
  1);
 
  INSERT INTO courses
  (courses_name,
   courses_section,
   teachers_id_teachers )
  VALUES
  ('Basic English 1',
  '102',
  2);

   INSERT INTO courses
  (courses_name,
   courses_section,
   teachers_id_teachers )
  VALUES
  ('Intermediate English 1',
  '101',
  2);

   INSERT INTO courses
  (courses_name,
   courses_section,
   teachers_id_teachers )
  VALUES
  ('Intermediate English 1',
  '102',
  1);
 
  INSERT INTO students_has_courses
  VALUES
  (1,
  1);

   INSERT INTO students_has_courses
  VALUES
  (2,
  1);

   INSERT INTO students_has_courses
  VALUES
  (3,
  1);

     INSERT INTO students_has_courses
  VALUES
  (3,
  2);

   INSERT INTO students_has_courses
  VALUES
  (4,
  2);

 
 ---- week 6 ----
 CREATE TABLE IF NOT EXISTS "topic" (
  "id_topic"  SERIAL PRIMARY KEY,
  "topic_name" VARCHAR(10) NOT NULL);

  INSERT INTO topic
  (topic_name)
  VALUES
  ('Faith');

  INSERT INTO topic
  (topic_name)
  VALUES
  ('Sacrifice');

  INSERT INTO topic
  (topic_name)
  VALUES
  ('Charity');

  CREATE TABLE IF NOT EXISTS "scriptures_topics" (
  "id_topic"   INTEGER,
  "id_scriptures" INTEGER);

ALTER TABLE "scriptures_topics" ADD FOREIGN KEY (id_topic) REFERENCES "topic" ("id_topic") ON DELETE CASCADE;
ALTER TABLE "scriptures_topics" ADD FOREIGN KEY (id_scriptures) REFERENCES "scriptures" ("id") ON DELETE CASCADE;

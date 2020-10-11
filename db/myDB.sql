-- -----------------------------------------------------
-- Schema language_center
-- -----------------------------------------------------
CREATE DATABASE language_center;

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
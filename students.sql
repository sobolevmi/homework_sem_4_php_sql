
-- create
CREATE TABLE STUDENTS (
  stId INTEGER(30) PRIMARY KEY AUTO_INCREMENT,
  Name TEXT(30) NOT NULL,
  Age INTEGER(30) NOT NULL,
  Address TEXT(30) NOT NULL
);

-- insert
INSERT INTO STUDENTS VALUES (0, 'Ivan Ivanov', '30', 'Moscow');
INSERT INTO STUDENTS VALUES (0, 'Petr Petrov', '29', 'Moscow');
INSERT INTO STUDENTS VALUES (0, 'Maria Sidorova', '21', 'Saint Petersburg');
INSERT INTO STUDENTS VALUES (0, 'Aleksey Belkin', '39', 'Ryazan');
INSERT INTO STUDENTS VALUES (0, 'Kristina Koneva', '24', 'Volgograd');
INSERT INTO STUDENTS VALUES (0, 'Vera Sergeeva', '46', 'Tver');
INSERT INTO STUDENTS VALUES (0, 'Ilya Volkov', '19', 'Vladivostok');
INSERT INTO STUDENTS VALUES (0, 'Anna Palkina', '41', 'Kransoyarsk');
INSERT INTO STUDENTS VALUES (0, 'Larisa Kim', '27', 'Saint Petersburg');
INSERT INTO STUDENTS VALUES (0, 'Ivan Medvedev', '36', 'Astrakhan');
INSERT INTO STUDENTS VALUES (0, 'Dmitry Smirnov', '23', 'Murmansk');
INSERT INTO STUDENTS VALUES (0, 'Elena Korablina', '21', 'Ekaterinburg');
INSERT INTO STUDENTS VALUES (0, 'Zhanna Fomina', '33', 'Voronezh');
INSERT INTO STUDENTS VALUES (0, 'Anton Larin', '20', 'Ufa');
INSERT INTO STUDENTS VALUES (0, 'Sergey Kovalev', '44', 'Perm');

-- fetch
SELECT * FROM STUDENTS
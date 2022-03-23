-- =============================================
-- Author:    < Kashish Chaurasia >
-- Create date:  < 12.03.2022 >
-- Description:  < version2.0 database script file for new database design and management >
-- =============================================

alter table users add user_type enum('educator', 'learner')  DEFAULT 'learner' not null;

-- -- Boards data insertion
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (16,'Assam','14-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (17,'Bihar','15-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (18,'Chandigarh','16-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (19,'Chhattisgarh','17-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (20,'Delhi','18-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (21,'Haryana','19-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (22,'Jammu and Kashmir','20-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (23,'Jharkhand','21-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (24,'Manipur','22-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (25,'Meghalaya','23-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (26,'Mizoram','24-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (27,'Nagaland','25-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (28,'Odisha','26-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (29,'Sikkim','27-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (30,'Tripura','28-02-2022 15:44',0);
-- INSERT INTO edu_board(edu_board_id,edu_board_title,edu_board_created,edu_board_updated) VALUES (31,'Uttar Pradesh','01-03-2022 15:44',0);

-- -- Subject data insertion
-- INSERT INTO edu_sub(edu_sub_id,edu_sub_title,edu_sub_created,edu_sub_updated) VALUES
--  (12,'Algebra','14-02-2022 14:25','0000-00-00')
-- ,(13,'English','14-02-2022 14:25','0000-00-00')
-- ,(14,'geography','14-02-2022 14:25','0000-00-01')
-- ,(15,'Geology','14-02-2022 14:25','0000-00-02')
-- ,(16,'geometry','14-02-2022 14:25','0000-00-03')
-- ,(17,'Applied Maths','14-02-2022 14:25','0000-00-04')
-- ,(18,'Home Science','14-02-2022 14:25','0000-00-05')
-- ,(19,'Mental Ability','14-02-2022 14:25','0000-00-06')
-- ,(20,'Organization of Commerce and Management','14-02-2022 14:25','0000-00-07')
-- ,(21,'Science & Technology','14-02-2022 14:25','0000-00-08')
-- ,(22,'Social Science','14-02-2022 14:25','0000-00-09')
-- ,(23,'Social Studies','14-02-2022 14:25','0000-00-10')
-- ,(24,'Sociology','14-02-2022 14:25','0000-00-11')
-- ,(25,'Engineering Aeronautical','14-02-2022 14:25','0000-00-12')
-- ,(26,'Engineering Aerospace','14-02-2022 14:25','0000-00-13')
-- ,(27,'Engineering Automotive','14-02-2022 14:25','0000-00-14')
-- ,(28,'Engineering Chemical','14-02-2022 14:25','0000-00-15')
-- ,(29,'Engineering Civil','14-02-2022 14:25','0000-00-16')
-- ,(30,'Engineering Computer Hardware','14-02-2022 14:25','0000-00-17')
-- ,(31,'Engineering Electrical','14-02-2022 14:25','0000-00-18')
-- ,(32,'Engineering electronic','14-02-2022 14:25','0000-00-19')
-- ,(33,'Engineering Environmental','14-02-2022 14:25','0000-00-20')
-- ,(34,'Engineering Health and Safety','14-02-2022 14:25','0000-00-21')
-- ,(35,'Engineering Industrial','14-02-2022 14:25','0000-00-22')
-- ,(36,'Engineering Marine','14-02-2022 14:25','0000-00-23')
-- ,(37,'Engineering Materials','14-02-2022 14:25','0000-00-24')
-- ,(38,'Engineering Mechanical','14-02-2022 14:25','0000-00-25')
-- ,(39,'Engineering Mining and Geological','14-02-2022 14:25','0000-00-26')
-- ,(40,'Engineering Petroleum','14-02-2022 14:25','0000-00-27')
-- ,(41,'Engineering Robotics','14-02-2022 14:25','0000-00-28')
-- ,(42,'Anthropology','14-02-2022 14:25','0000-00-29')
-- ,(43,'Archaeology','14-02-2022 14:25','0000-00-30')
-- ,(44,'Biochemistry','14-02-2022 14:25','0000-00-31')
-- ,(45,'Biotechnology','14-02-2022 14:25','0000-00-32')
-- ,(46,'Dermatology','14-02-2022 14:25','0000-00-33')
-- ,(47,'Microbiology','14-02-2022 14:25','0000-00-34')
-- ,(48,'philosophy','14-02-2022 14:25','0000-00-35')
-- ,(49,'Physiology','14-02-2022 14:25','0000-00-36')
-- ,(50,'Psychology','14-02-2022 14:25','0000-00-37')
-- ,(51,'Nursing','14-02-2022 14:25','0000-00-38')
-- ,(52,'Pediatrics','14-02-2022 14:25','0000-00-39')
-- ,(53,'Computer Science','14-02-2022 14:25','0000-00-40')
-- ,(54,'Health Sciences','14-02-2022 14:25','0000-00-41')
-- ,(55,'Life Sciences','14-02-2022 14:25','0000-00-42')
-- ,(56,'Earth Sciences','14-02-2022 14:25','0000-00-43')
-- ,(57,'Political Science','14-02-2022 14:25','0000-00-44')
-- ,(58,'Systems Science','14-02-2022 14:25','0000-00-45')
-- ,(59,'Space Sciences','14-02-2022 14:25','0000-00-46')
-- ,(60,'Forensic Science','14-02-2022 14:25','0000-00-47')
-- ,(61,'Finance','14-02-2022 14:25','0000-00-48')
-- ,(62,'Statistics','14-02-2022 14:25','0000-00-49')
-- ,(63,'Telecom','14-02-2022 14:25','0000-00-50')
-- ,(64,'Media and Entertainment','14-02-2022 14:25','0000-00-51')
-- ,(65,'Logistic AND Supply Chain','14-02-2022 14:25','0000-00-52')
-- ,(66,'Public Administration','14-02-2022 14:25','0000-00-53')
-- ,(67,'Environmental Studies and Forestry','14-02-2022 14:25','0000-00-54')
-- ,(68,'literature','14-02-2022 14:25','0000-00-55')
-- ,(69,'Human Physical Performance and Recreation','14-02-2022 14:25','0000-00-56')
-- ,(70,'Journalism, Media Studies and Communication','14-02-2022 14:25','0000-00-57')
-- ,(71,'Library and Museum Studies','14-02-2022 14:25','0000-00-58')
-- ,(72,'Religion and Religious studies','14-02-2022 14:25','0000-00-59')
-- ,(73,'Cultural and Ethnic Studies','14-02-2022 14:25','0000-00-60')

-- CREATE TABLE IF NOT EXISTS city (
--     city_id int(11) not null AUTO_INCREMENT,
--     city_title varchar(1024) not null,
--     PRIMARY KEY (city_id)
-- );

-- CREATE TABLE IF NOT EXISTS state (
--     state_id int(11) not null AUTO_INCREMENT,
--     state_title varchar(1024) not null,
--     PRIMARY KEY (state_id)
-- );

-- CREATE TABLE IF NOT EXISTS country (
--     country_id int(11) not null AUTO_INCREMENT,
--     country_title varchar(1024) not null,
--     PRIMARY KEY (country_id)
-- );

-- Cities
-- INSERT INTO city(city_title) VALUES ('Ahmedabad');
-- INSERT INTO city(city_title) VALUES ('Bangalore');
-- INSERT INTO city(city_title) VALUES ('Chandigarh');
-- INSERT INTO city(city_title) VALUES ('Chennai');
-- INSERT INTO city(city_title) VALUES ('Coimbatore');
-- INSERT INTO city(city_title) VALUES ('Delhi-NCR');
-- INSERT INTO city(city_title) VALUES ('Ernakulam');
-- INSERT INTO city(city_title) VALUES ('Goa');
-- INSERT INTO city(city_title) VALUES ('Hyderabad');
-- INSERT INTO city(city_title) VALUES ('Indore');
-- INSERT INTO city(city_title) VALUES ('Jaipur');
-- INSERT INTO city(city_title) VALUES ('Kolkata');
-- INSERT INTO city(city_title) VALUES ('Mumbai');
-- INSERT INTO city(city_title) VALUES ('Mysore');
-- INSERT INTO city(city_title) VALUES ('Nagpur');
-- INSERT INTO city(city_title) VALUES ('Nashik');
-- INSERT INTO city(city_title) VALUES ('Pune');
-- INSERT INTO city(city_title) VALUES ('Surat');
-- INSERT INTO city(city_title) VALUES ('Vadodara');
-- INSERT INTO city(city_title) VALUES ('Vizag');
-- INSERT INTO city(city_title) VALUES ('Dispur');
-- INSERT INTO city(city_title) VALUES ('Patna');
-- INSERT INTO city(city_title) VALUES ('Delhi');
-- INSERT INTO city(city_title) VALUES ('Rajkot');
-- INSERT INTO city(city_title) VALUES ('Faridabad');
-- INSERT INTO city(city_title) VALUES ('Jamshedpur');
-- INSERT INTO city(city_title) VALUES ('Dhanbad');
-- INSERT INTO city(city_title) VALUES ('Ranchi');
-- INSERT INTO city(city_title) VALUES ('Thiruvananthapuram');
-- INSERT INTO city(city_title) VALUES ('Bhopal');
-- INSERT INTO city(city_title) VALUES ('Jabalpur');
-- INSERT INTO city(city_title) VALUES ('Gwalior');
-- INSERT INTO city(city_title) VALUES ('Aurangabad');
-- INSERT INTO city(city_title) VALUES ('Shillong');
-- INSERT INTO city(city_title) VALUES ('Bhubaneswar');
-- INSERT INTO city(city_title) VALUES ('Jodhpur');
-- INSERT INTO city(city_title) VALUES ('Kota');
-- INSERT INTO city(city_title) VALUES ('Visakhapatnam');
-- INSERT INTO city(city_title) VALUES ('Vijayawada');
-- INSERT INTO city(city_title) VALUES ('Itanagar');
-- INSERT INTO city(city_title) VALUES ('Raipur');
-- INSERT INTO city(city_title) VALUES ('Bhilai');
-- INSERT INTO city(city_title) VALUES ('Panaji');
-- INSERT INTO city(city_title) VALUES ('Mysuru');
-- INSERT INTO city(city_title) VALUES ('Hubballi-Dharwad');
-- INSERT INTO city(city_title) VALUES ('Ludhiana');
-- INSERT INTO city(city_title) VALUES ('Amritsar');
-- INSERT INTO city(city_title) VALUES ('Madurai');
-- INSERT INTO city(city_title) VALUES ('Salem');
-- INSERT INTO city(city_title) VALUES ('Tiruchirappalli');
-- INSERT INTO city(city_title) VALUES ('Kanpur');
-- INSERT INTO city(city_title) VALUES ('Lucknow');
-- INSERT INTO city(city_title) VALUES ('Ghaziabad');
-- INSERT INTO city(city_title) VALUES ('Agra');
-- INSERT INTO city(city_title) VALUES ('Varanasi');
-- INSERT INTO city(city_title) VALUES ('Meerut');
-- INSERT INTO city(city_title) VALUES ('Allahabad');
-- INSERT INTO city(city_title) VALUES ('Asansol');
-- INSERT INTO city(city_title) VALUES ('Imphal');
-- INSERT INTO city(city_title) VALUES ('Aizawl');
-- INSERT INTO city(city_title) VALUES ('Kohima');
-- INSERT INTO city(city_title) VALUES ('Agartala');
-- INSERT INTO city(city_title) VALUES ('Gangtok');
-- INSERT INTO city(city_title) VALUES ('Srinagar');

-- States
-- INSERT INTO state(state_title) VALUES ('Andaman and Nicobar Islands');
-- INSERT INTO state(state_title) VALUES ('Andhra Pradesh');
-- INSERT INTO state(state_title) VALUES ('Arunachal Pradesh');
-- INSERT INTO state(state_title) VALUES ('Assam');
-- INSERT INTO state(state_title) VALUES ('Bihar');
-- INSERT INTO state(state_title) VALUES ('Chandigarh');
-- INSERT INTO state(state_title) VALUES ('Chhattisgarh');
-- INSERT INTO state(state_title) VALUES ('Dadra and Nagar Haveli and Daman and Diu');
-- INSERT INTO state(state_title) VALUES ('Delhi');
-- INSERT INTO state(state_title) VALUES ('Goa');
-- INSERT INTO state(state_title) VALUES ('Gujarat');
-- INSERT INTO state(state_title) VALUES ('Haryana');
-- INSERT INTO state(state_title) VALUES ('Himachal Pradesh');
-- INSERT INTO state(state_title) VALUES ('Jammu and Kashmir');
-- INSERT INTO state(state_title) VALUES ('Jharkhand');
-- INSERT INTO state(state_title) VALUES ('Karnataka');
-- INSERT INTO state(state_title) VALUES ('Kerala');
-- INSERT INTO state(state_title) VALUES ('Ladakh');
-- INSERT INTO state(state_title) VALUES ('Lakshadweep');
-- INSERT INTO state(state_title) VALUES ('Madhya Pradesh');
-- INSERT INTO state(state_title) VALUES ('Maharashtra');
-- INSERT INTO state(state_title) VALUES ('Manipur');
-- INSERT INTO state(state_title) VALUES ('Meghalaya');
-- INSERT INTO state(state_title) VALUES ('Mizoram');
-- INSERT INTO state(state_title) VALUES ('Nagaland');
-- INSERT INTO state(state_title) VALUES ('Odisha');
-- INSERT INTO state(state_title) VALUES ('Puducherry');
-- INSERT INTO state(state_title) VALUES ('Punjab');
-- INSERT INTO state(state_title) VALUES ('Rajasthan');
-- INSERT INTO state(state_title) VALUES ('Sikkim');
-- INSERT INTO state(state_title) VALUES ('Tamil Nadu');
-- INSERT INTO state(state_title) VALUES ('Telangana');
-- INSERT INTO state(state_title) VALUES ('Tripura');
-- INSERT INTO state(state_title) VALUES ('Uttar Pradesh');
-- INSERT INTO state(state_title) VALUES ('Uttarakhand');
-- INSERT INTO state(state_title) VALUES ('West Bengal');

-- -- Country
-- INSERT INTO country(country_title) VALUES ('India');

-- CREATE TABLE tbl_learner (
--   Lid int(11) not null AUTO_INCREMENT,
--   user_id int(20) NOT NULL,
--   gender int(11) NOT NULL,
--   dob datetime not null,
--   city_id int(20) NOT NULL,
--   state_id int(20) NOT NULL,
--   country_id int(20) NOT NULL,
--   primary_language varchar(1024) not null,
--   school varchar(1024) not null,
--   lrn_class longtext DEFAULT NULL,
--   lrn_subject longtext DEFAULT NULL,
--   lrn_board longtext DEFAULT NULL,
--   lrn_exam longtext DEFAULT NULL,
--   lrn_career longtext DEFAULT NULL,
--   lrn_course longtext DEFAULT NULL,
--   lrn_art longtext NOT NULL,
--   lrn_lang longtext DEFAULT NULL,
--   date_added datetime not null default now(),
--   date_modified datetime not null default now(),
--   PRIMARY KEY (Lid)
  
-- );

-- ALTER TABLE tbl_educator add edu_experience int(10) default 0,
-- add edu_pincode int(10),
-- add edu_mode int (4) default 1,
-- add edu_country int (4) default 1,
-- add academic_cost int (10),
-- add career_cost int (10),
-- add prof_cost int (10),
-- add edu_slot varchar(1024) ;

-- ALTER TABLE tbl_educator CHANGE concelling_lang career_lang ;

-- CREATE TABLE category (
--   Cid int(11) not null AUTO_INCREMENT,
--   category_title varchar(1024) not null,
--   date_added datetime not null default now(),
--   PRIMARY KEY (Cid)
  
-- );

-- CREATE TABLE sub_category (
--   Subid int(11) not null AUTO_INCREMENT,
--   sub_category_title varchar(1024) not null,
--   Cid int(20) NOT NULL,
--   date_added datetime not null default now(),
--   PRIMARY KEY (Subid)
  
-- );

-- ALTER TABLE edu_art add Subid int(4) default 3;
-- ALTER TABLE edu_board add Subid int(4) default 1;
-- ALTER TABLE edu_career add Subid int(4) default 2;
-- ALTER TABLE edu_class add Subid int(4) default 1;
-- ALTER TABLE edu_course add Subid int(4) default 3;
-- ALTER TABLE edu_exams add Subid int(4) default 1;
-- ALTER TABLE edu_lang add Subid int(4) default 0;
-- ALTER TABLE edu_sub add Subid int(4) default 1;

-- INSERT INTO category(category_title) VALUES
--  ('Academics')
-- ,('Career Counselling')
-- ,('Professional Training');

-- INSERT INTO sub_category(sub_category_title, Cid) VALUES
--  ('Class',1),('Subjects',1),('Boards',1),('Exams',1),('Career',2),('Professional Courses',3),('Art',3);

--------------------------------------------version-2.0------------------------------------------------------------------
-- 1
CREATE TABLE custom_category (
  category_id int(11) not null AUTO_INCREMENT,
  category_name varchar(1024) not null,
  category_image varchar(512) ,
  sort_order int(11) DEFAULT 9999 NOT NULL,
  status int(1) DEFAULT 1 not null,
  date_added datetime not null default now(),
  PRIMARY KEY (category_id)
  
);

-- 2
CREATE TABLE custom_sub_category (
  sub_category_id int(11) not null AUTO_INCREMENT,
  sub_category_name varchar(1024) not null,
  sub_category_image varchar(512) ,
  category_id int(11) NOT NULL,
  sort_order int(11) DEFAULT 9999 NOT NULL,
  status int(1) DEFAULT 1 not null,
  date_added datetime not null default now(),
  PRIMARY KEY (sub_category_id)
  
);

-- 3
CREATE TABLE custom_location (
  location_id int(11) not null AUTO_INCREMENT,
  pincode int(11) not null,
  city_id int(11) not null,
  city_name varchar(1024) not null,
  state_id int(11) not null,
  state_name varchar(1024) not null,
  country_id int(11) not null, 
  country_name varchar(1024) not null,
  date_added datetime not null default now(),
  PRIMARY KEY (location_id)
  
);

-- 4
CREATE TABLE custom_language (
  language_id int(11) not null AUTO_INCREMENT,
  language_name varchar(1024) not null,
  sort_order int(11) DEFAULT 9999 NOT NULL,
  status int(1) DEFAULT 1 not null,
  date_added datetime not null default now(),
  PRIMARY KEY (language_id)
  
);

-- 5
CREATE TABLE custom_educator (
  educator_id int(11) not null AUTO_INCREMENT,
  user_id int(11) not null,
  edu_name varchar(1024) not null,
  edu_number varchar(50) not null,
  edu_email varchar(1024) not null,
  edu_whatsapp varchar(50)  not null,
  edu_mode int (4) default 1,
  edu_location_id int (4) ,
  edu_address varchar(1024) not null,
  search_string varchar(1024) not null,
  edu_image varchar(1024) not null,
  edu_cover_image varchar(1024) not null,
  edu_isfeatured int(1) DEFAULT 0 not null,
  edu_experience int(10),
  edu_dob datetime not null,
  edu_slot varchar(1024) ,
  edu_description varchar(1024) ,
  sort_order int(11) DEFAULT 9999 NOT NULL,
  status int(1) DEFAULT 1 not null,
  date_added datetime not null default now(),
  date_modified datetime not null default now(),
  PRIMARY KEY (educator_id)
  
);

-- 6
CREATE TABLE custom_educator_sub_category (
  edu_sub_id int(11) not null AUTO_INCREMENT,
  educator_id int(11) not null,
  sub_category_id varchar(1024) not null,
  language_id varchar(1024) not null,
  cost int(200) not null,
  date_added datetime not null default now(),
  date_modified datetime not null default now(),
  PRIMARY KEY (edu_sub_id)
  
);

-- 7
CREATE TABLE custom_educator_offer (
  edu_offer_id int(11) not null AUTO_INCREMENT,
  educator_id int(11) ,
  offer_name varchar(1024) ,
  offer_price int(11) ,
  offer_description varchar(1024) ,
  offer_image varchar(1024) default null,
  offer_link varchar(1024) ,
  date_added datetime  default now(),
  date_modified datetime  default now(),
  PRIMARY KEY (edu_offer_id)

);

-- 8
CREATE TABLE custom_learner (
  learner_id int(11) not null AUTO_INCREMENT,
  user_id int(20) NOT NULL,
  gender int(11) NOT NULL,
  dob datetime not null,
  location_id int (11) default 1,
  language_id int(11) not null,
  school varchar(1024) not null,
  date_added datetime not null default now(),
  date_modified datetime not null default now(),
  PRIMARY KEY (learner_id)
  
);

-- 9
CREATE TABLE custom_learner_sub_category (
  learner_sub_id int(11) not null AUTO_INCREMENT,
  learner_id int(20) NOT NULL,
  sub_category_id varchar(1024) not null,
  date_added datetime not null default now(),
  date_modified datetime not null default now(),
  PRIMARY KEY (learner_sub_id)
  
);

-- 10
CREATE TABLE custom_liked (
  liked_id int(11) not null AUTO_INCREMENT,
  educator_id int(20) NOT NULL,
  user_id int(11) not null,
  date_added datetime not null default now(),
  PRIMARY KEY (liked_id)
  
);

-- 11
CREATE TABLE custom_review (
  review_id int(11) not null AUTO_INCREMENT,
  educator_id int(20) NOT NULL,
  user_id int(11) not null,
  rating int(11) not null,
  message  varchar(1024) ,
  date_added datetime not null default now(),
  date_modified datetime not null default now(),
  PRIMARY KEY (review_id)
  
);

--12
CREATE TABLE custom_class (
  class_id int(11) not null AUTO_INCREMENT,
  class_name varchar(1024) not null,
  date_added datetime not null default now(),
  PRIMARY KEY (class_id)
  
);

--13
CREATE TABLE custom_board (
  board_id int(11) not null AUTO_INCREMENT,
  board_name varchar(1024) not null,
  date_added datetime not null default now(),
  PRIMARY KEY (board_id)
  
);

alter table custom_educator add board_id varchar(1024) not null,;
alter table custom_educator add class_idvarchar(1024) not null,;
alter table custom_learner add class_id varchar(1024) not null,;
alter table custom_learner add board_id varchar(1024) not null,;


INSERT INTO custom_category(category_name) VALUES
  ('Academics')
,('Competetive Exams')
,('Career Counselling')
,('Art')
,('Language Learning')
,('Professional Course');

-- custom_class table insertion
INSERT INTO custom_class(class_name) VALUES ('Pre Primary');
INSERT INTO custom_class(class_name) VALUES ('V - X');
INSERT INTO custom_class(class_name) VALUES ('XI - XII');
INSERT INTO custom_class(class_name) VALUES ('Undergraduate');
INSERT INTO custom_class(class_name) VALUES ('Postgraduate');
INSERT INTO custom_class(class_name) VALUES ('Other');

--custom_board table insertion
INSERT INTO custom_board(board_name) VALUES ('andhra pradesh');
INSERT INTO custom_board(board_name) VALUES ('CBSE');
INSERT INTO custom_board(board_name) VALUES ('goa');
INSERT INTO custom_board(board_name) VALUES ('gujarat');
INSERT INTO custom_board(board_name) VALUES ('ICSE');
INSERT INTO custom_board(board_name) VALUES ('karnataka');
INSERT INTO custom_board(board_name) VALUES ('kerala');
INSERT INTO custom_board(board_name) VALUES ('madhya pradesh');
INSERT INTO custom_board(board_name) VALUES ('maharashtra');
INSERT INTO custom_board(board_name) VALUES ('national institute of open schooling');
INSERT INTO custom_board(board_name) VALUES ('punjab');
INSERT INTO custom_board(board_name) VALUES ('rajasthan');
INSERT INTO custom_board(board_name) VALUES ('tamil nadu');
INSERT INTO custom_board(board_name) VALUES ('telangana');
INSERT INTO custom_board(board_name) VALUES ('west bengal');
INSERT INTO custom_board(board_name) VALUES ('assam');
INSERT INTO custom_board(board_name) VALUES ('bihar');
INSERT INTO custom_board(board_name) VALUES ('chandigarh');
INSERT INTO custom_board(board_name) VALUES ('chhattisgarh');
INSERT INTO custom_board(board_name) VALUES ('delhi');
INSERT INTO custom_board(board_name) VALUES ('haryana');
INSERT INTO custom_board(board_name) VALUES ('jammu and kashmir');
INSERT INTO custom_board(board_name) VALUES ('jharkhand');
INSERT INTO custom_board(board_name) VALUES ('manipur');
INSERT INTO custom_board(board_name) VALUES ('meghalaya');
INSERT INTO custom_board(board_name) VALUES ('mizoram');
INSERT INTO custom_board(board_name) VALUES ('nagaland');
INSERT INTO custom_board(board_name) VALUES ('odisha');
INSERT INTO custom_board(board_name) VALUES ('sikkim');
INSERT INTO custom_board(board_name) VALUES ('tripura');
INSERT INTO custom_board(board_name) VALUES ('uttar pradesh');
INSERT INTO custom_board(board_name) VALUES ('other');

--custom_language insertion
INSERT INTO custom_language(language_name) VALUES ('Bengali');
INSERT INTO custom_language(language_name) VALUES ('English');
INSERT INTO custom_language(language_name) VALUES ('French');
INSERT INTO custom_language(language_name) VALUES ('German');
INSERT INTO custom_language(language_name) VALUES ('Gujarati');
INSERT INTO custom_language(language_name) VALUES ('Hindi');
INSERT INTO custom_language(language_name) VALUES ('Japanese');
INSERT INTO custom_language(language_name) VALUES ('Kannada');
INSERT INTO custom_language(language_name) VALUES ('Konkani');
INSERT INTO custom_language(language_name) VALUES ('Malayalam');
INSERT INTO custom_language(language_name) VALUES ('Marathi');
INSERT INTO custom_language(language_name) VALUES ('Punjabi');
INSERT INTO custom_language(language_name) VALUES ('Sanskrit');
INSERT INTO custom_language(language_name) VALUES ('Sign Language');
INSERT INTO custom_language(language_name) VALUES ('Spanish');
INSERT INTO custom_language(language_name) VALUES ('Tamil');
INSERT INTO custom_language(language_name) VALUES ('Telugu');


--custom_sub_category insertion
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Biology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Chemistry',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Commerce',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('History',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Mathematics',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Physics',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Algebra',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('English',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('geography',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Geology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('geometry',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Applied Maths',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Home Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Mental Ability',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Organization of Commerce and Management',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Science & Technology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Social Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Social Studies',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Sociology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Law',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Management',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Medical',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering  Aeronautical',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Aerospace',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Automotive',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Chemical',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Civil',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Computer Hardware',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Electrical',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering electronic',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Environmental',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Health and Safety',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Industrial',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Marine',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Materials',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Mechanical',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Mining and Geological',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Petroleum',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Engineering Robotics',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Anthropology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Archaeology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Biochemistry',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Biotechnology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Dermatology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Microbiology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('philosophy',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Physiology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Psychology',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Nursing',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Pediatrics',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Computer Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Health Sciences',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Life Sciences',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Earth Sciences',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Political Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Systems Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Space Sciences',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Forensic Science',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Finance',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Statistics',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Telecom',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Media and Entertainment',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Logistic AND Supply Chain',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Environmental Studies and Forestry',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('literature',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Human Physical Performance and Recreation',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Journalism',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Library and Museum Studies',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Religion and Religious studies',1);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Cultural and Ethnic Studies',1);

INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Airline Transport Pilot License (ATPL)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Banks',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Railways',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Civil Services',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Commercial Pilot License (CPL)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Common Admission Test (CAT)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Common Law Admission Test (CLAT)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Defense',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('CDS/AFCAT/CAPF',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Services Selection Board (SSB)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Airforce/Navy/Coast Guard',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('NDA',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Graduate Management Admission Test (GMAT)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Institute of Chartered Accountants of India (ICAI) Exam',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('International English Language Testing System (IELTS)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Joint Entrance Examination (Main)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Judiciary - PCS (J)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Maharashtra Public Service Commission (MPSC)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('National Eligibility-cum-Entrance Test (NEET)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Educator Eligibility Test (TET)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('UNION PUBLIC SERVICE COMMISSION (UPSC)',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('State PSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('BPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('CGPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('WBPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('MPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('TNPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Kerala PSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('GPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('OPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('JPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Karnataka PSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('UPPSC & UPSSSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('MPPSC & VYAPAM',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('APPSC & TSPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('RPSC',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Maharashtra Bharti',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('RPSC Grade I Educator',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('UPSSSC VDO',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('RPSC Grade II Educator',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Maharashtra Group C Services',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Gujarat Class 3',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Gujarat Class 3',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Karnataka Teaching',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('WBP & Gen Combined',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Kerala Administrative Services',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Odisha Teaching',2);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('TNPSC Group 4 and VAO',2);

INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Aviation',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Banking',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in BPO/KPO',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career In corporates',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career In Defence',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Engineering',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Fitness',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Government Jobs',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Healthcare/Pharma',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career In Import Export',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Information Technology',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Manufacturing',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Real estate',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Retail',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Shipping',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Teaching',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Career in Telecom',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('How to get Scholarships',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Studies in Arts',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Studies in Commerce',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Studies in engineering',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Studies in Medical',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Studies Management',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Study abroad',3);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Entrepreneurship',3);

INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Acting',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Crafting',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Drama',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Drawing',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Drum',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Embroidery',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Flute',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Guitar',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Meditation',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Music',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Painting',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Performing arts',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Photography',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Piano',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Saxophone',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Sitar',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Trumpet',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Videography',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Violin',4);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Visual arts',4);

INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Arabic',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Bengali',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('English',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('French',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('German',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Gujarati',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Hindi',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Japanese',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Kannada',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Konkani',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Malayalam',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Marathi',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Punjabi',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Sanskrit',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Sign Language',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Spanish',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Tamil',5);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Telugu',5);

INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('3D + Animation',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Accounting',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Airline Transport Pilot Licence',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Airport Ground Services',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Architecture and Design',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Artificial Intelligence',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Blockchain',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Cabin Crew',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Cloud Computing',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Commercial Pilot License',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Computer Basics',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Corporate Training',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Cyber Security',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Data Science',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Data Visualization',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('DevOps',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Digital Marketing',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Entrepreneurship',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Ethical Hacking',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Game Development',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Graphic Desgning',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Health and Beauty',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Hospitality Management',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('IATA',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Information Technology',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Internet of Things',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('ITIL',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Kids Coding',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Lean Six Sigma',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Logo Design',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Machine Learning',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Marketing',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Microsoct Excel',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Mobile App Development',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Nutrition',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('PMP',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Sales and Marketing',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('SAP',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Soft Skill and Image Building',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('SQL',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Tableau',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Travel & Tourism',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('UX / UI',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Voice and Accent',6);
INSERT INTO custom_sub_category(sub_category_name,category_id) VALUES ('Website Development',6);

alter table custom_educator_sub_category add category_id int(11);


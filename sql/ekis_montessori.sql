
Create database ekis_montessori;
use ekis_montessori;


create table student(
    std_id int(11) not null auto_increment,
    std_name varchar(50) not null,
    std_no varchar(10) not null unique,
    std_dob date not null,
    std_pob text not null,
    std_haddr text,
    std_class varchar(50),
    primary key (std_id)
);

desc student;


create table schoolrecords(
    id int(11) not null auto_increment,
    sch_name text not null,
    sch_addr text,
    d_attd date,
    lev_rd varchar(10) not null,
    std_no varchar(10) not null,
primary key (id)
);
desc schoolrecords;

create table parent(
    id int(11) not null auto_increment,
    f_name varchar(50) not null,
    f_nlty varchar(58) not null,
    f_htown varchar(20) not null,
    f_phoneno varchar(15) not null,
    f_occ varchar(20),
    m_name varchar(50),
    m_nlty varchar(58),
    m_htown varchar(20),
    m_phoneno varchar(15),
    m_occ varchar(20),
    parent_addr text,
    std_no varchar(10) not null references student(std_no) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);

desc parent;

create table nextofkin(
    id int(11) not null auto_increment,
    nok_name varchar(50),
    nok_phoneno varchar(15),
    std_no varchar(10) not null references student(std_no) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc nextofkin;




create table healthrecords(
    id int(11) not null auto_increment,
    spec_nds varchar(20),
    sick_con varchar(20),
    med varchar(20),
    allegies varchar(30),
    eye_prob varchar(30),
    ear_prob varchar(30),
    std_no varchar(10) not null references student(std_no) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc healthrecords;



create table studentimage(
    id int(11) not null auto_increment,
    image text,
    image_desc text,
    std_no varchar(10) not null references student(std_no) ON UPDATE CASCADE ON DELETE CASCADE,
primary key (id)
);
desc studentimage;



create table house(
    id int(11) not null auto_increment,
    h_addr text not null,
    h_popu int(11),
    h_lang varchar(50) not null,
    std_no varchar(10) not null references student(std_no) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc house;


create table otherinfo(
    id int(11) not null auto_increment,
    others varchar(200),
    std_no varchar(10) not null references student(std_no) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);

desc otherinfo;
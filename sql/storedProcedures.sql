
INSERT INTO student (std_name,std_no,std_dob,std_pob,std_haddr,std_class) values ('Wendolin Kate','WEN2000','1991-01-22','Accra-Hospital-road','Legon Village','Class 2');
INSERT INTO studentimage (image,image_desc,std_no) values ('myimage.jpg','Kate Image','WEN2000');
INSERT INTO schoolrecords (sch_name,sch_addr,d_attd,lev_rd,std_no) values ('Prince Int. Sch','East-Legon','2017-02-10','Class 3','WEN2000');
INSERT INTO healthrecords (spec_nds,sick_con,med,allegies,eye_prob,ear_prob,std_no) values ('None','N/A','None','None','None','None','WEN2000');


INSERT INTO parent (f_name,f_nlty,f_htown,f_phoneno,f_occ,m_name,m_nlty,m_htown,m_phoneno,m_occ,parent_addr,std_no)
values ('Samuel Wendolin','Gh','Holland city','0547272728','Dev','Julie Wendolin','Nig','Abuja','0547219187','Banker','Westlands-Legon','WEN2000');


INSERT INTO nextofkin (nok_name,nok_phoneno,std_no)
values ('Green Wendolin','0234583736','WEN2000');


INSERT INTO house (h_addr,h_popu,h_lang,std_no)
values ('Legon',5,'English/French','WEN2000');



INSERT INTO otherinfo (others,std_no)
values ('None','WEN2000');
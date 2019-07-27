
INSERT INTO student (std_name,std_no,std_dob,std_pob,std_haddr,std_class)
    values ('Wendolin Kate','WEN2000','1991-01-22','Accra-Hospital-road','Legon Village','Class 2');


INSERT INTO parent (f_name,f_nlty,f_htown,f_phoneno,f_occ,m_name,m_nlty,m_htown,m_phoneno,m_occ,parent_addr,std_id)
    values ('Samuel Wendolin','Gh','Holland city','0547272728','Dev','Julie Wendolin','Nig','Abuja','0547219187','Banker','Westlands-Legon',1);


INSERT INTO nextofkin (nok_name,nok_phoneno,std_id)
    values ('Green Wendolin','0234583736',1);


INSERT INTO house (h_addr,h_popu,h_lang,std_id)
    values ('Legon',5,'English/French',1);


INSERT INTO schoolrecords (sch_name,sch_addr,d_attd,lev_rd,std_id)
    values ('Prince Int. Sch','East-Legon','2017-02-10','Class 3',1);


INSERT INTO healthrecords (spec_nds,sick_con,med,allegies,eye_prob,ear_prob,std_id)
    values ('None','N/A','None','None','None','None',1);


INSERT INTO studentimage (image,image_desc,std_id)
values ('myimage.jpg','Kate Image',1);


INSERT INTO otherinfo (others,std_id)
values ('None',1);
create database AURY_PROJECT
use AURY_PROJECT
create table utilisateurs(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            NOM VARCHAR(30),
            PRENOM VARCHAR(30),
            NAISSANCE  VARCHAR(18),
            TELEPHONE VARCHAR(18),
            EMAIL VARCHAR(100)
);

drop table utilisateurs;
insert into utilisateurs(NOM,PRENOM,NAISSANCE,TELEPHONE,EMAIL) values
        ('GAKUNZI','Aury Klein','20/2/2000','68531511','krumpaury@gmail.com'),
        ('KAMARO','Nick Lenz','16/5/1998','77654545','kamaro30@gmail.com'),
        ('ITANGIVYIZA','Bess Leana','14/7/2003','79947894','itangabess@gmail.com'),
        ('Muhezagiro','Belly Carlos','15/11/2005','78493827','muhezcarlos@gmail.com'),
        ('IGIZENEZA','Benit Elton','25/1/2000','78645327','igizeelton@gmail.com'),
        ('GAKUNZI','Isa Irla','20/11/20011','67892890','ikazeisay@gmail.com'),
        ('NIJIMBERE','Joe Guibert','2/12/1996','67829389','joeguibert@gmail.com');

        ALTER TABLE utilisateurs
        modify column EMAIL VARCHAR(10) to EMAIL VARCHAR(100);
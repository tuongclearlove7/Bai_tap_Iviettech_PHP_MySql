create database quanlynhanvien_db;
use quanlynhanvien_db;
create table nhanvien(
	manv int primary key,
    tennv nvarchar(255),
    mavt int, 
    mapb nvarchar(10),
    luong decimal,
    ngayvl datetime
   
);
create table phongban(
	mapb nvarchar(10) primary key,
    tenpb nvarchar(255),
    diachi nvarchar(255),
    ngayvl datetime
);
create table vitri(
	mavt int primary key, 
    mota nvarchar(1000000000)
);

ALTER TABLE nhanvien
ADD CONSTRAINT phongban_Fk_nhanvien FOREIGN KEY(mapb)
REFERENCES phongban(mapb);
    
ALTER TABLE nhanvien
ADD CONSTRAINT vitri_Fk_nhanvien FOREIGN KEY(mavt) 
REFERENCES vitri(mavt);

INSERT INTO phongban(mapb, tenpb, diachi, ngayvl)
VALUES 
('TT','Phòng ban 1','31 Nguyễn Khuyến Liên Chiểu Đà Nẵng','2023-01-16'),
('TM','Phòng ban 1','24 Chơn Tâm 7 Liên Chiểu Đà Nẵng','2023-03-13'),
('TQ','Phòng ban 2','22/41 Ngô Gia Tự EaH"leo Đak Lak','2023-01-01'),
('NC','Phòng ban 2','22/41 Ngô Gia Tự EaH"leo Đak Lak','2023-011-02'),
('HP','Phòng ban 3','Bàu Hạc Thanh Khê Đà Nẵng','2023-09-09');

INSERT INTO phongban(mapb, tenpb, diachi, ngayvl)
VALUES 
('MC','Phòng ban 3','Hà Nội','2023-01-16');

INSERT INTO vitri(mavt, mota)
VALUES 
(1,'Trần Thị Mai Phòng ban 1'),
(2,'Nguyễn Thị Cúc phòng ban 2'),
(3,'Hồ Phương Thảo Phòng ban 3');

INSERT INTO nhanvien(manv, tennv, mavt, mapb, luong, ngayvl)
VALUES 
(1,'Trần Thế Tường',1,'TT', 30000000,'2023-01-16'),
(2,'Trần Thị Mai',1,'TM', 30000000,'2023-03-13'),
(3,'Trần Vinh Quang',2,'TQ', 30000000,'2023-01-01'),
(4,'Nguyễn Thị Cúc',2,'NC', 30000000,'2023-11-02'),
(5,'Hồ Phương Thảo',3,'HP', 30000000,'2023-09-09');

update nhanvien
set mapb = 'NC' and luong = 300000
where manv = 4;

update phongban
set diachi = 'Đại học bưu chính viên thông Hà Nội'
where mapb = 'MC';

update vitri
set mota = 'Trần Thị Mai Phòng ban 1'
where mavt = 1;


select * from nhanvien;
select * from phongban;
select * from vitri;

drop table nhanvien;
drop table phongban;
drop table vitri;





































































create database baitap1;
use baitap1;
create table khachhang(
	
    makh varchar(4) primary key,
    hoten_kh varchar(40),
    diachi varchar(50),
	sodt_kh  varchar(20),
    ngaysinh datetime,
    ngdk datetime,
    doanhso decimal
);

create table nhanvien(
	manv varchar(4) primary key,
    hoten_nv varchar(40),
	sodt_nv  varchar(20),
    ngvl datetime
);

create table sanpham(
	masp varchar(4) primary key,
    tensp varchar(40),
	dvt  varchar(20),
	nuocsx varchar(40),
    gia decimal
);
create table hoadon(
	sohd int primary key,
    nghd datetime,
	manv  varchar(4),
    makh  varchar(4),
    trigia decimal
);

create table cthd(
	sohd int ,
    masp varchar(4),
	sl int
);

ALTER TABLE hoadon
ADD CONSTRAINT fk_hoadon_nhanvien FOREIGN KEY(manv)
REFERENCES nhanvien(manv);

ALTER TABLE hoadon
ADD CONSTRAINT fk_hoadon_khachhang FOREIGN KEY(makh)
REFERENCES khachhang(makh);

ALTER TABLE cthd
ADD CONSTRAINT fk_cthd_hoadon FOREIGN KEY(sohd)
REFERENCES hoadon(sohd);

ALTER TABLE cthd
ADD CONSTRAINT fk_cthd_sanpham FOREIGN KEY(masp)
REFERENCES sanpham(masp);

INSERT INTO nhanvien(manv, hoten_nv, sodt_nv, ngvl)
VALUES ('NV01','Nguyen Nhu Nhut','0927345678','2006-04-13'),
       ('NV02','Le Thi Phi Yen','0987567390','2006-04-21'),
       ('NV03','Nguyen Van B','0997047382','2006-04-27'),
	   ('NV04','Ngo Thanh Tuan','0913758498','2006-06-24'),
	   ('NV05','Nguyen Thi Truc Thanh','0918590387','2006-07-20');
       
INSERT INTO khachhang(makh, hoten_kh, diachi, sodt_kh, ngaysinh, ngdk, doanhso)
VALUES ('KH01','Nguyen Van A','731 Tran Hung Dao Q5 tpHCM','08823451','1960-10-22', '2006-07-22', '13060000'),
       ('KH02','Tran Ngoc Han','23/5 Nguyen Trai Q5 tpHCM','0908256478','1974-04-03','2006-07-30', '280000'),
       ('KH03','Tran Ngoc Linh','45 Nguyen Canh Chan Q1 tpHCM','0938776266','1980-06-12','2006-08-05', '3860000'),
	   ('KH04','Ha Duy Lap','50/34 Le Dai Hanh Q10 tpHCM','0917325476','1965-03-09','2006-10-02', '250000'),
	   ('KH05','Tran Minh Long','34 Truong Dinh Q3 tpHCM','0882345134','1950-03-10','2006-10-28', '21000'),
       ('KH06','Le Nhat Minh','227 Nguyen Van Cu Q5 tpHCM','098234512','1981-12-31','2006-11-24', '915000'),
       ('KH07','Le Hoai Thuong','32/3 Tran Binh Trong Q5 tpHCM','038234517','1971-04-06','2006-12-01', '12500'),
       ('KH08','Nguyen Van Tam','45/2 An Duong Vuong Q5 tpHCM','098823453','1971-10-01','2006-12-13', '365000'),
       ('KH09','Phan Thi Thanh','837 Le Hong Phong Q5 tpHCM','038234511','1979-09-03','2007-01-14', '70000'),
       ('KH10','Le Ha Vinh','34/34B Nguyen Trai Q1 tpHCM','01234567','1983-05-02','2007-01-16', '67500');

INSERT INTO khachhang(makh, hoten_kh, diachi, sodt_kh, ngaysinh, ngdk, doanhso)VALUES
 ('KH07','Le Hoai Thuong','32/3 Tran Binh Trong Q5 tpHCM','038234517','1971-04-06','2006-12-01', '12500'),
('KH08','Nguyen Van Tam','45/2 An Duong Vuong Q5 tpHCM','098823453','1971-10-01','2006-12-13', '365000');



INSERT INTO sanpham(masp, tensp, dvt, nuocsx, gia)
VALUES ('BC01','But chi','cay','Singapore', '3000'),
       ('BC02','But chi','cay','Singapore', '5000'),
       ('BC03','But chi','cay','Viet Nam', '3500'),
	   ('BC04','But chi','Hop','Viet Nam', '30000'),
	   ('BB01','But bi','cay','Viet Nam', '5000'),
       ('BB02','But bi','cay','Trung Quoc', '7000'),
       ('BB03','But bi','hop','Thai Lan', '100000'),
       ('TV01','Tap 100 giay mong','quyen','Trung Quoc', '3500'),
       ('TV02','Tap 200 giay mong','quyen','Viet Nam', '4500'),
       ('TV03','Tap 100 giay tot','quyen','Viet Nam', '3000'),
       ('TV04','Tap 200 giay tot','quyen','Viet Nam', '5500'),
       ('TV05','Tap 100 trang', 'chuc','Viet Nam', '23000'),
       ('TV06','Tap 200 trang', 'chuc','Trung Quoc', '53000'),
       ('TV07','Tap 100 trang', 'chuc','Trung Quoc', '34000'),
       ('ST01','so tay 500 trang', 'chuc','Viet Nam', '40000'),
       ('ST02','so tay loai 2', 'chuc','Viet Nam', '55000'),
       ('ST03','so tay loai 2', 'quyen','Thai Lan', '51000'),
       ('ST04','so tay', 'quyen','Thai Lan', '55000'),
       ('ST05','so tay mong', 'quyen','Viet Nam', '20000'),
	   ('ST06','phan viet bang', 'hop','Viet Nam', '5000'),
	   ('ST07','Phan khong bui', 'hop','Viet Nam', '7000'),
	   ('ST08','Bong bang', 'cai','Viet Nam', '1000'),
	   ('ST09','But long', 'cay','Viet Nam', '5000'),
	   ('ST10','But long', 'cay','Trung Quoc', '7000');

INSERT INTO hoadon(sohd, nghd, manv, makh, trigia)
VALUES (1001,'2006-07-23','NV01','KH01', '320000'),
       (1002,'2006-08-12','NV02','KH01', '840000'),
       (1003,'2006-08-23','NV01','KH02', '100000'),
	   (1004,'2006-09-01','NV01','KH02', '180000'),
	   (1005,'2006-10-20','NV02','KH01', '3800000'),
       (1006,'2006-10-16','NV03','KH01', '2430000'),
       (1007,'2006-10-28','NV03','KH03', '510000'),
       (1008,'2006-10-28','NV03','KH01', '440000'),
       (1009,'2006-10-28','NV04','KH03', '200000'),
       (1010,'2006-11-01','NV01','KH01', '5200000'),
       (1011,'2006-11-04','NV03','KH04', '250000'),
       (1012,'2006-11-30','NV03','KH05', '21000'),
       (1013,'2006-12-12','NV01','KH06', '5000'),
       (1014,'2006-12-31','NV02','KH03', '3150000'),
       (1015,'2007-01-01','NV01','KH06', '910000'),
       (1016,'2007-01-01','NV02','KH07', '12500'),
       (1017,'2007-01-02','NV03','KH08', '35000'),
       (1018,'2007-01-13','NV03','KH08', '330000'),
       (1019,'2007-01-13','NV03','KH01', '30000'),
       (1020,'2007-01-14','NV04','KH09', '70000'),
       (1021,'2007-01-16','NV03','KH10', '67500'),
       (1022,'2007-01-16','NV03',null, '7000'),
       (1023,'2007-01-17','NV01',null, '330000');
       
INSERT INTO cthd(sohd, masp, sl)
VALUES (1001,'TV02',10),
       (1001,'ST01',5),
       (1001,'BC01',5),
	   (1001,'BC02',10),
	   (1001,'ST08',10),
       (1002,'BC04',20),
       (1002,'BB01',20),
       (1002,'BB02',20),
       (1003,'BB03',10),
       (1004,'TV01',20),
       (1004,'TV02',10),
       (1004,'TV03',10),
       (1004,'TV04',10),
       (1005,'TV05',50),
       (1005,'TV06',50),
       (1006,'TV07',20);

INSERT INTO cthd(sohd, masp, sl)
VALUES (1001,'TV02',10),
       (1002,'ST01',5),
       (1003,'BC01',5),
       (1004,'BC02',10),
       (1005,'ST08',10);

ALTER TABLE sanpham
ADD ghichu varchar(20);

ALTER TABLE khachhang
ADD loaikh TINYINT;

ALTER TABLE sanpham
MODIFY COLUMN ghichu varchar(100);

ALTER TABLE sanpham
DROP COLUMN ghichu;

update khachhang
set hoten_kh = 'Nguyễn Văn B'
where makh = 'KH01';

update khachhang
set hoten_kh = 'Phan Thi Thanh'
where makh = 'KH09';

update khachhang
set hoten_kh = 'Nguyễn Văn Hoan'
where makh = 'KH09' and ngdk like '2007%';

DELETE FROM hoadon WHERE makh IN (SELECT makh FROM khachhang 
WHERE ngaysinh >= '1971-01-01' AND ngaysinh <= '1971-12-31');
DELETE FROM khachhang 
WHERE ngaysinh >= '1971-01-01' AND ngaysinh <= '1971-12-31';

DELETE FROM khachhang 
WHERE ngaysinh >= '1971-01-01' AND ngaysinh <= '1971-12-31' 
and ngdk like '2006-01-01' AND ngaysinh <= '2006-12-31' ;

DELETE FROM cthd
WHERE sohd IN (SELECT sohd FROM hoadon WHERE makh = 'KH01');
DELETE FROM hoadon
WHERE makh = 'KH01';

select * from khachhang;
select * from nhanvien;
select * from sanpham;
select * from hoadon;
select * from cthd;

drop table khachhang;
drop table nhanvien;
drop table sanpham;
drop table hoadon;
drop table cthd;









































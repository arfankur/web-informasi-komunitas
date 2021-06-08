drop database if exists 12200541_bab10;
create database 12200541_bab10;
use 12200541_bab10;

create TABLE if not exists barang(
Kd_brg Char (3) Primary Key,
Nm_brg Varchar (45),
Jumlah Int (2),
Harga Int (8)
);

create TABLE if not exists customer(
Kd_cust Char (3) Primary Key,
Nm_cust Varchar (45),
Alamat_cust Varchar (75),
Telp_cust Varchar (20)
);

create TABLE if not exists transaksi(
id int Primary Key AUTO_INCREMENT,
Kd_brg Char (3),
Kd_cust Char (3)
);

show columns from barang;
show columns from customer;
show columns from transaksi;

insert into barang(
Kd_brg,
Nm_brg,
Jumlah,
Harga
)
values

("B01", "Buku", 50, 4500),
("B02", "Pulpen", 35, 3000),
("B03", "Penggaris", 20, 1500),
("B04", "Penghapus", 15, 500),
("B05", "Spidol", 30, 4000);

insert into customer(

Kd_cust,
Nm_cust,
Alamat_cust,
Telp_cust
)
values
(111, "Nagoya Saki", "BSD", 084783838383),
(112, "Ibmu Raihan", "Serpong", 082798989898),
(113, "Anto Hoed", "Muncul", 081040404040),
(114, "Abdul Karim", "Keranggan", 086567676767),
(115, "Roberto Salim", "Cisauk", 083164646464);

insert into transaksi
(
Id,
Kd_brg,
Kd_cust
)
values
(1, "B01", "111"),
(2, "B01", "113"),
(3, "B02", "112"),
(4, "B02", "114"),
(5, "B02", "113"),
(6, "B03", "115"),
(7, "B03", "111"),
(8, "B04", "114"),
(9, "B05", "112"),
(10, "B05", "113");

select * from barang;
select * from customer;
select * from transaksi;
select barang.*, transaksi.*, customer.* from transaksi inner join customer on transaksi.Kd_cust = customer.Kd_cust inner join barang on transaksi.Kd_brg = barang.Kd_brg where Nm_cust='Ibmu Raihan';
DELETE from customer where Nm_cust = 'Roberto Salim';
select * from customer;
update customer set Alamat_cust='Parung' where Nm_cust='Anto Hoed';
select barang.*, transaksi.*, customer.* from transaksi inner join customer on transaksi.Kd_cust = customer.Kd_cust inner join barang on transaksi.Kd_brg = barang.Kd_brg where Nm_cust='Abdul Karim';

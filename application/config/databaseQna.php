<?php
//buat koneksi dengan MySQL
$link=mysql_connect('localhost','root','');
  
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
  
//buat database db_lms
$result=mysql_query('CREATE DATABASE db_lms');
if (!$result)
{
   die("Database db_lms gagal dibuat");
}
  
//gunakan database db_lms
$result=mysql_query('USE db_lms');
if (!$result)
{
   die("Database db_lms gagal digunakan");
}
  
//buat tabel Qna
$query= "CREATE TABLE tb_qna (id INT NOT NULL PRIMARY KEY, 
quistion Varchar(100), answer Varchar (100))";
$result= mysql_query($query);
if (!$result)
{
   die("Tabel tb_qna gagal dibuat");
}
  
//tambahkan data ke dalam tabel qna
$query= INSERT INTO `tb_qna` (`id`, `questions`, `answer`) VALUES 
('1', 'Ada Jadwal Training Apa Saja Hari Ini', 'Ada Trainng Android, Kotlin, dan Flutter');
mysql_query($query);

echo "Database universitas dan Tabel tb_qna berhasil dibuat";
?>
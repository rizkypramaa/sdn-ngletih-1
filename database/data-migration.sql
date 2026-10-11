SET FOREIGN_KEY_CHECKS=0;

INSERT INTO `users` (`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ('1','Administrator','admin@sdngletih1.sch.id',NULL,'$2y$12$RZIS3tpxfEzrRrMFJWogTOP1GG4qnSGDLdXZvxrUY.ywY9l2W/4.m',NULL,'2026-08-13 14:27:32','2026-08-13 14:27:32');

INSERT INTO `beritas` (`id`,`judul`,`slug`,`isi`,`gambar`,`tanggal`,`kategori`,`created_at`,`updated_at`,`gambar2`,`gambar3`) VALUES ('4','berita test 2','berita-test-2','Berikut adalah contoh cerita pendek yang terdiri atas satu paragraf narasi.
Matahari sore memancarkan cahaya keemasan di halaman belakang rumah saat Budi duduk di bawah pohon mangga sambil memegang sebuah buku usang. Angin berhembus pelan, membawa aroma harum bunga melati dari pot di dekat pagar. Tiba-tiba, seekor kucing kecil berbulu oranye melompat ke pangkuannya dan mendengkur lembut mencari perhatian. Budi tersenyum, lalu mengelus kepala kucing itu sambil melanjutkan bacaannya dengan tenang.','berita/PBnJuBlyHoDOEuBmn06jfrZkTjMoLQMiHABgg1l3.jpg','2026-09-23','Prestasi','2026-09-23 04:57:45','2026-10-06 13:36:45',NULL,NULL);

INSERT INTO `galeris` (`id`,`judul`,`gambar`,`deskripsi`,`tanggal`,`created_at`,`updated_at`) VALUES ('2','galeri test','galeri/MweDP1YWYiHUmo3Z5SNeF5T3SVA918vNZxRDyZ6O.jpg','lorem ipsum','2222-02-22','2026-09-23 13:15:50','2026-09-23 13:15:50');
INSERT INTO `galeris` (`id`,`judul`,`gambar`,`deskripsi`,`tanggal`,`created_at`,`updated_at`) VALUES ('3','lorem ipsum','galeri/QFExlS6BMV5tMPm1B0ngtcvTa8sC8sOnzQvBMbOS.jpg','lorem ipsum','1111-11-11','2026-09-23 13:16:25','2026-09-23 13:16:25');
INSERT INTO `galeris` (`id`,`judul`,`gambar`,`deskripsi`,`tanggal`,`created_at`,`updated_at`) VALUES ('4','lorem ipsum','galeri/NjNduqyOKafJNGQg0ozdS5CkxnG1AGmrUtggTlEY.jpg','lorem ipsum','3333-03-31','2026-09-23 13:16:52','2026-09-23 13:16:52');

INSERT INTO `prestasis` (`id`,`judul`,`nama`,`tingkat`,`tahun`,`kategori`,`created_at`,`updated_at`) VALUES ('1','atletik','lorem ipsum','Kota Kediri','2026','Akademik','2026-09-23 13:55:59','2026-09-23 13:55:59');
INSERT INTO `prestasis` (`id`,`judul`,`nama`,`tingkat`,`tahun`,`kategori`,`created_at`,`updated_at`) VALUES ('2','juara 2','lorem ipsum','jawa timur','2026','Non Akademik','2026-09-23 13:56:32','2026-09-23 13:56:32');

INSERT INTO `ekstrakurikulers` (`id`,`nama`,`deskripsi`,`icon`,`warna`,`urutan`,`created_at`,`updated_at`) VALUES ('1','pramuka','lorem ipsum','bi bi-compass','ekstra-card-blue','1','2026-09-23 14:56:30','2026-09-23 14:56:30');
INSERT INTO `ekstrakurikulers` (`id`,`nama`,`deskripsi`,`icon`,`warna`,`urutan`,`created_at`,`updated_at`) VALUES ('2','sepak bola','lorem ipsum','bi bi-compass',NULL,'2','2026-09-24 05:17:27','2026-09-24 05:17:27');
INSERT INTO `ekstrakurikulers` (`id`,`nama`,`deskripsi`,`icon`,`warna`,`urutan`,`created_at`,`updated_at`) VALUES ('3','rebana','lorem ipsum','bi bi-journal-check','ekstra-card-green','3','2026-09-24 05:26:46','2026-09-24 05:26:46');


SET FOREIGN_KEY_CHECKS=1;

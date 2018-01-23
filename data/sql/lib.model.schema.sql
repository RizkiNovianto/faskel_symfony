
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- bank_sampah
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `bank_sampah`;


CREATE TABLE `bank_sampah`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`id_wilayah` INTEGER  NOT NULL,
	`nama` VARCHAR(50),
	`alamat` VARCHAR(50),
	`dasar_pendirian` VARCHAR(25),
	`tanggal_pendirian` INTEGER,
	`bulan_pendirian` INTEGER,
	`tahun_pendirian` INTEGER,
	`sk` VARCHAR(20),
	`ketua` VARCHAR(100),
	`jumlah_nasabah` INTEGER,
	`omset` INTEGER,
	PRIMARY KEY (`id`),
	KEY `FK_bank_sampah_wilayah`(`id_wilayah`),
	CONSTRAINT `bank_sampah_FK_1`
		FOREIGN KEY (`id_wilayah`)
		REFERENCES `wilayah` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- ipal_komunal
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ipal_komunal`;


CREATE TABLE `ipal_komunal`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`id_wilayah` INTEGER  NOT NULL,
	`nama` VARCHAR(50),
	`alamat` VARCHAR(50),
	`dasar_pembangunan` VARCHAR(25),
	`tanggal_pembangunan` INTEGER,
	`bulan_pembangunan` INTEGER,
	`tahun_pembangunan` INTEGER,
	`pengelola` VARCHAR(50),
	`kondisi` VARCHAR(25),
	PRIMARY KEY (`id`),
	KEY `FK_ipal_komunal_wilayah`(`id_wilayah`),
	CONSTRAINT `ipal_komunal_FK_1`
		FOREIGN KEY (`id_wilayah`)
		REFERENCES `wilayah` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- jenis_kader
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `jenis_kader`;


CREATE TABLE `jenis_kader`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`jabatan` VARCHAR(50)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- kader
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `kader`;


CREATE TABLE `kader`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`id_wilayah` INTEGER  NOT NULL,
	`id_jenis_kader` INTEGER,
	`nama` VARCHAR(50)  NOT NULL,
	`alamat` VARCHAR(50),
	`RT` VARCHAR(10),
	`RW` VARCHAR(10),
	`no_telp` VARCHAR(13),
	PRIMARY KEY (`id`),
	KEY `FK_kader_wilayah`(`id_wilayah`),
	KEY `FK_kader_jenis_kader`(`id_jenis_kader`),
	CONSTRAINT `kader_FK_1`
		FOREIGN KEY (`id_wilayah`)
		REFERENCES `wilayah` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	CONSTRAINT `kader_FK_2`
		FOREIGN KEY (`id_jenis_kader`)
		REFERENCES `jenis_kader` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- wilayah
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `wilayah`;


CREATE TABLE `wilayah`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`wilayah` VARCHAR(20)  NOT NULL,
	`kecamatan` VARCHAR(25)  NOT NULL,
	`kelurahan` VARCHAR(25)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

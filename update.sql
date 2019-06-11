ALTER TABLE `referensi` ADD `no_urut` INT NULL AFTER `prodi_id`;
ALTER TABLE `referensi` ADD `judul` VARCHAR(200) NULL AFTER `no_urut`;
ALTER TABLE `konsultasi` ADD `judul` VARCHAR(200) NULL AFTER `skor`;

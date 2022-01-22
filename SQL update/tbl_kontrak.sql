/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:3306
 Source Schema         : sibanpem

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 30/12/2021 10:24:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_kontrak
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kontrak`;
CREATE TABLE `tbl_kontrak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkontrak` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_tipe` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_kontrak_nomor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_kontrak_tgl` date DEFAULT NULL,
  `k_kontrak_nilai` double DEFAULT NULL,
  `k_kontrak_dokumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `k_dipa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_dipa_tgl` date DEFAULT NULL,
  `k_kode_kegiatan` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_kode_akun` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_kode_output` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_kode_ro` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_vendor_npwp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_vendor_nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_eselon_kode` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_eselon_nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_satker_kode` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `k_satker_nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `titik_bagi` int(11) DEFAULT NULL,
  `provinsi` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '00',
  `kabupaten` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0000',
  `kecamatan` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0000000',
  `desa` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0000000000',
  `alamat` varchar(75) DEFAULT NULL,
  `file_kontrak` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `file_cpcl` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `k_kontrak_status_review` int(4) DEFAULT '0',
  `is_ok` tinyint(1) DEFAULT '0',
  `is_ongkir` tinyint(1) DEFAULT '0',
  `is_swakelola` tinyint(1) DEFAULT '0',
  `is_langsung` tinyint(1) DEFAULT '0',
  `k_kontrak_cpcl` varchar(100) DEFAULT NULL,
  `k_kode_kro` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of tbl_kontrak
-- ----------------------------
BEGIN;
INSERT INTO `tbl_kontrak` VALUES (1, NULL, NULL, 'KTRK-01', '2009-05-02', 0, NULL, 'DIPA-0`', '2020-03-01', '5887', '526311', NULL, '011', '', '0', NULL, NULL, NULL, NULL, NULL, '00', '0000', '0000000', '0000000000', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_kontrak` VALUES (2, NULL, NULL, 'Ktrk-2', '2021-12-22', 10000000, NULL, 'Dipa-2', '2000-08-01', '5886', '526312', NULL, '010', '', '0', NULL, NULL, NULL, NULL, NULL, '00', '0000', '0000000', '0000000000', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_kontrak` VALUES (3, NULL, NULL, 'KTRK-03', '2020-10-10', 0, NULL, 'Dipa-03', '2000-09-09', '1771', '526125', NULL, '017', '', '0', NULL, NULL, NULL, NULL, NULL, '00', '0000', '0000000', '0000000000', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_kontrak` VALUES (4, NULL, 'Barang', 'KTRK-05', '2021-01-01', 0, NULL, 'Dipa-4', '2021-10-10', '1773', '526113', NULL, '016', '', '0', NULL, NULL, NULL, NULL, NULL, '00', '0000', '0000000', '0000000000', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_kontrak` VALUES (5, NULL, 'Barang', 'Ktrk-001', '2021-12-27', 100000000, NULL, 'Dipa_001', '2021-12-21', '5887', '526311', NULL, '011', '', '0', NULL, NULL, NULL, NULL, NULL, '00', '0000', '0000000', '0000000000', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '12345678', NULL);
INSERT INTO `tbl_kontrak` VALUES (6, NULL, 'Barang', 'Ktrk-009', '2021-12-28', 50000000, NULL, 'Dipa09', '2021-12-21', '5886', '526321', NULL, '018', '', '0', NULL, NULL, NULL, NULL, NULL, '00', '0000', '0000000', '0000000000', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '7777777777', 'BMA');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

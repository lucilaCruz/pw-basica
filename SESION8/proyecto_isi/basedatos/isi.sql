/*
 Navicat Premium Data Transfer

 Source Server         : cn
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : isi

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 23/03/2025 21:07:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `idcategoria` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idcategoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES (1, 'laptops', 'lenovo1.jpg', 'N');
INSERT INTO `categoria` VALUES (2, 'Ropa', 'ropa.jpg', 'E');
INSERT INTO `categoria` VALUES (3, 'Accesorios', 'accesorios.jpg', 'E');
INSERT INTO `categoria` VALUES (4, 'Herramientas', 'herramientas.jpg', 'E');
INSERT INTO `categoria` VALUES (5, 'ropa', 'ropa.png', 'E');
INSERT INTO `categoria` VALUES (6, 'ropa', 'ropa.png', 'E');
INSERT INTO `categoria` VALUES (7, 'ropa', 'ropa.png', 'N');

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `idproducto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `precio` decimal(10, 2) NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`idproducto`) USING BTREE,
  INDEX `categoria_id`(`categoria_id`) USING BTREE,
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`idcategoria`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES (1, 'Zapatos', 115.90, 'zapatos.jpg', 'N', 1);
INSERT INTO `producto` VALUES (2, 'Camisa blanca para hombre TALLA M', 129.90, 'camisa_blanca.jpg', 'N', 7);
INSERT INTO `producto` VALUES (3, 'Pantalon editado', 220.65, 'pantalon.jpg', 'N', 7);
INSERT INTO `producto` VALUES (4, 'Zapatillas', 90.00, 'zapatillanike.jpg', 'E', 1);
INSERT INTO `producto` VALUES (5, 'Pintura', 80.00, 'balde-pato.jpg', 'E', 4);
INSERT INTO `producto` VALUES (6, 'Camisa blanca para hombre V2 editada', 124.89, 'camisa_blanca.jpg', 'N', 1);
INSERT INTO `producto` VALUES (7, 'peras', 5.00, 'img_16_911d1a51f08e15a010252cb52dcbf922.jpg', 'N', 7);

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nro_documento` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idusuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'Lucila', 'Cruz', '76767676', 'lucila', 'lucila');

SET FOREIGN_KEY_CHECKS = 1;

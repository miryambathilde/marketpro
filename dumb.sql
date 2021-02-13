CREATE DATABASE `marketpro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `marketpro`;

CREATE TABLE IF NOT EXISTS `ofertas` (
  `sku` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introDescripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `precioOferta` decimal(10,2) DEFAULT NULL,
  `moneda` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(001, 'SPA para 2', 'Vive un momento inolvidable en Andorra', 'No te puedes perder...', '/img/spa.jpg', 389.00, 120.00, 'Euros');
INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(002, 'Especial Sushi', 'El auténtico sabor de Japón en Barcelona', 'Viaja a Japón por un momento...', 'img/sushi.jpg', 80.00, 20.00, 'Euros');
INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(003, 'Paracaidismo', 'Para los amantes de la adrenalina', 'Siente la auténtica adrenalina...', 'img/paracaidismo.jpg', 280.00, 100.00, 'Euros');
INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(004, 'Menú Gourmet', 'Vive la mejor experiencia gastronómica', 'Siente el placer de comer como un verdadero sibarita...', 'img/gourmet.jpg', 150.00, 60.00, 'Euros');


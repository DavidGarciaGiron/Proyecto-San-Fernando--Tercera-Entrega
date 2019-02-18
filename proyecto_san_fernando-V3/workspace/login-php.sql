use sanFernando;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `privilegio`) VALUES
(1, 'Tecnico', 'Tecnico', 'Tecnico@hotmail.com', 'tecnico123', 1),
(2, 'Lider', 'Lider', 'Lider@hotmail.com', 'lider123', 2),
(3, 'Ingeniero', 'Ingeniero', 'Ingeniero@hotmail.com', 'ingeniero123', 3),
(4, 'David Fernandez', 'dfernandez', 'dfernandez_84@hotmail.com', 'zfg0518', 1),
(5, 'Ronald Jara', 'Rjara', 'rjara@hotmail.com', 'ingeniero123', 3);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

drop table usuarios;

-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para unimar
CREATE DATABASE IF NOT EXISTS `unimar` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `unimar`;

-- Copiando dados para a tabela unimar.clientes_unimar: ~4 rows (aproximadamente)
INSERT INTO `clientes_unimar` (`id`, `nome`, `cpf`, `email`, `tel`, `cep`, `rua`, `numero`, `comp`, `bairro`, `cidade`, `uf`, `data_cad`, `data_mod`) VALUES
	(1, 'Marcelo Martins Barbosa', '067.025.886-58', 'martins160@gmail.com', '(34) 99655-3285', '38413-297', 'Rua Francisco Rodrigues Serralha', '350', '', 'Chácaras Tubalina e Quartel', 'Uberlândia', 'MG', '2023-12-08 05:31:10', '2023-12-08 14:27:12'),
	(2, 'Lucas Pereira', '469.261.410-29', 'lucasp@gmail.com', '(21) 11548-5000', '22050-002', 'Avenida Nossa Senhora de Copacabana', '100', '', 'Copacabana', 'Rio de Janeiro', 'RJ', '2023-12-08 05:34:22', NULL),
	(3, 'Marcos Antônio', '733.036.230-15', 'marcoant125@gmail.com', '(11) 99652-0152', '03017-000', 'Rua Bresser', '1325', '', 'Brás', 'São Paulo', 'SP', '2023-12-08 07:35:42', NULL),
	(4, 'Francisco da Silva Oliveira', '670.928.860-90', 'franciscoteste@tes.com', '(64) 99657-8455', '74912-261', 'Avenida Bela Vista', '64', 'Frente', 'Jardim Bela Vista - Continuação', 'Aparecida de Goiânia', 'GO', '2023-12-08 09:40:11', '2023-12-08 13:59:34');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

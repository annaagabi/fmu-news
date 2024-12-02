-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 04:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmu_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `postagem` text NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `postagem`, `id_cliente`, `titulo`) VALUES
(1, 'A edição funcionou', 3, 'Editou não'),
(2, 'A edição funcionou deu certo', 3, 'deu certo'),
(3, 'A edição funcionou', 3, 'Editou'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus interdum leo, ut tempor neque pulvinar aliquet. Proin non vestibulum quam, at ultricies sapien. Morbi ex turpis, facilisis ac nunc at, interdum auctor risus. Vestibulum efficitur sagittis purus. Pellentesque accumsan tincidunt tortor at finibus. Nullam imperdiet diam sollicitudin porttitor auctor. Nullam molestie, arcu eu pretium fringilla, libero sem cursus eros, eget finibus eros eros nec nunc. Vestibulum at ultrices nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus posuere vel augue in auctor. Vivamus id elementum ligula. Nulla tristique malesuada magna id interdum. Nam pellentesque nisl nibh, a facilisis felis pellentesque ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit vel nisl nec cursus.\r\n\r\nNullam viverra gravida est quis ultrices. Nam purus lorem, bibendum ut eros ac, lacinia placerat quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sed varius ipsum. Etiam vitae porta elit. Integer scelerisque, ligula id ornare varius, urna quam tempor nisi, et volutpat mauris quam et ante. Sed tincidunt lacus sed libero lobortis, non pellentesque velit hendrerit. Maecenas dictum nec erat at tincidunt. Suspendisse diam quam, ultrices hendrerit nisi eleifend, ultricies volutpat arcu. Aliquam et metus erat.\r\n\r\nMaecenas sapien magna, feugiat sed quam nec, tristique tempor diam. Vestibulum lorem enim, condimentum ut viverra sed, faucibus nec dolor. Sed vestibulum congue molestie. In euismod magna sed mauris mollis blandit. Quisque rhoncus eleifend erat, vehicula faucibus risus euismod iaculis. Donec scelerisque euismod sollicitudin. Curabitur quis odio tincidunt, congue risus molestie, cursus dui.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus lacus risus, vehicula nec ornare quis, euismod eu neque. Duis viverra elementum egestas. Fusce interdum tellus nec tellus porta posuere. Maecenas ullamcorper, ipsum vitae mollis pharetra, diam mi placerat risus, in iaculis ipsum massa a sem. Nullam vitae leo eleifend ex lobortis tempor dignissim sed lectus. In condimentum placerat tempus. Proin suscipit congue mi vitae luctus. Morbi sit amet dui sit amet est rutrum rhoncus. Duis sed sodales risus, id vulputate neque. Maecenas nibh leo, interdum eget posuere a, aliquam id dui. Sed aliquam dolor quis dui consequat tincidunt. Praesent tortor neque, hendrerit et nisl at, accumsan aliquam sem.\r\n\r\nPellentesque finibus metus diam, sit amet pulvinar turpis sagittis venenatis. Etiam nunc ligula, mollis vel tellus vitae, lobortis vestibulum diam. In vitae velit diam. Vivamus facilisis nulla vitae rhoncus mollis. Aenean sed libero eget elit blandit elementum. Donec sed risus convallis, ornare tortor ut, sodales lorem. Nullam a risus a turpis suscipit finibus. Quisque arcu arcu, viverra a fermentum in, mattis a justo. Nam ut volutpat odio. Phasellus eleifend quam eu vehicula dapibus.', 1, 'Troca');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'teste', 'teste@gmail.com', 'teste'),
(2, 'teste', 'teste@gmail.com', 'teste'),
(3, 'Anna', 'anna@gmail.com', '$2y$10$zY.TNZibBhXp5SfKL5bwsuW/NKQkfx92JAdSkXwHtY3b/noOO4hM.'),
(4, 'admin', 'admin@gmail.com', '$2y$10$45Zj80HtiluX9aqqNjhptOVRL.El88NX5Mye/jqrtf5q1IfV7Ocim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_cliente` (`id_cliente`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

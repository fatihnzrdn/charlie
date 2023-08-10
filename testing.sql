
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES
(231, 'John', 'Smith'),
(232, 'Carol', 'Ferrari'),
(233, 'Darrell', 'Mitten'),
(234, 'Elizbeth', 'Noyes'),
(235, 'Edna', 'William'),
(236, 'Roy', 'Hise'),
(237, 'Sheila', 'Aguinaldo'),
(238, 'Peter', 'Goad'),
(239, 'Kenneth', 'Simons'),
(2310, 'Dona', 'Huber'),
(2311, 'Mandela', 'Nelson');

ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2312;
COMMIT;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`, `gender`) VALUES
(1, 'John', 'Smith', 'Male'),
(2, 'Peter', 'Parker', 'Male'),
(4, 'Donna', 'Huber', 'Male'),
(5, 'Anastasia', 'Peterson', 'Male'),
(6, 'Ollen', 'Donald', 'Male'),
(10, 'Joseph', 'Stein', 'Male'),
(11, 'Wilson', 'Fischer', 'Male'),
(12, 'Lillie', 'Kirst', 'Female'),
(13, 'James', 'Whitchurch', 'Male'),
(14, 'Timothy', 'Brewer', 'Male'),
(16, 'Sally', 'Martin', 'Male'),
(17, 'Allison', 'Pinkston', 'Male'),
(18, 'Karen', 'Davis', 'Male'),
(19, 'Jaclyn', 'Rocco', 'Male'),
(20, 'Pamela', 'Boyter', 'Male'),
(21, 'Anthony', 'Alaniz', 'Male'),
(22, 'Myrtle', 'Stiltner', 'Male'),
(23, 'Gary', 'Hernandez', 'Male'),
(24, 'Fred', 'Jeffery', 'Male'),
(25, 'Ronald', 'Stjohn', 'Male'),
(26, 'Stephen', 'Mohamed', 'Male'),
(28, 'Michael', 'Dyer', 'Male'),
(29, 'Betty', 'Beam', 'Male'),
(30, 'Anna', 'Peterson', 'Female'),
(31, 'Peter', 'Stodola', 'Male'),
(32, 'Ralph', 'Jones', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES
(2, 'John', 'Smith'),
(3, 'Carol', 'Ferrari'),
(4, 'Darrell', 'Mitten'),
(5, 'Elizbeth', 'Noyes'),
(6, 'Edna', 'William'),
(7, 'Roy', 'Hise'),
(8, 'Sheila', 'Aguinaldo'),
(9, 'Peter', 'Goad'),
(10, 'Kenneth', 'Simons'),
(11, 'Dona', 'Huber'),
(12, 'William', 'Soliz'),
(13, 'Nelson', 'Dismuke');

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
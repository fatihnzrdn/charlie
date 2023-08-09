
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `web_ccit`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No`, `username`, `password`) VALUES
(1, 'user', '$2y$10$.uKfJeojs.hJSe19jVs4VejM2MYs55HCkwiHUbuf4Ru/qzoxc5Tgu'),
(2, 'test', '$2y$10$HU3RLStK9h2r0FxftiTOcePWocdtOArxVK8pnKV.LlJTbSPO1LvZa');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `No` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `login_time` datetime NOT NULL,
  `ip_address` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`No`, `username`, `login_time`, `ip_address`) VALUES
(1, 'admin', '2023-07-25 09:57:58', 0),
(2, 'user', '2023-07-25 10:05:18', 0),
(3, 'user', '2023-07-25 10:05:56', 0);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`No`);


--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;



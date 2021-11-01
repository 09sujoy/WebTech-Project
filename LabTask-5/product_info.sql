

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `product_info` (
  `ID` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Buying Price` int(20) NOT NULL,
  `Selling Price` int(20) NOT NULL,
  `Display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product_info` (`ID`, `Name`, `Buying Price`, `Selling Price`, `Display`) VALUES
(3, 'Apple', 22, 50, 'YES'),
(4, 'Blue berry', 23, 40, 'YES'),
(5, 'Strawbary', 40, 50, 'YES'),
(6, 'Lichi', 50, 60, 'YES'),
(7, 'Mango', 12, 19, 'YES'),
(8, 'Jackfruit', 100, 200, 'YES');

ALTER TABLE `product_info`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `product_info`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

CREATE TABLE `end_inv_entries` (
  `barid` varchar(80) NOT NULL,
  `barname` varchar(80) NOT NULL,
  `manname` varchar(80) NOT NULL,
  `date` varchar(80) NOT NULL,
  `endcoorscase` int(20),
  `endcoorscan` int(20),
  `endmillercase` int(20),
  `endmillercan` int(20),
  `endvizzycase` int(20),
  `endvizzycan` int(20),
  `endtopocase` int(20),
  `endtopocan` int(20),
  `endrdccase` int(20),
  `endrdccan` int(20),
  `endrdmcase` int(20),
  `endrdmcan` int(20),
  `endbstcase` int(20),
  `endbstcan` int(20),
  `endwatercase` int(20),
  `endwaterbottle` int(20)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
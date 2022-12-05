CREATE TABLE `inv_entries` (
  `barid` INT(80) NOT NULL,
  `barname` varchar(80) NOT NULL,
  `manname` varchar(80) NOT NULL,
  `date` DATE NOT NULL,
  `begcoorscase` int(20),
  `begcoorscan` int(20),
  `begmillercase` int(20),
  `begmillercan` int(20),
  `begvizzycase` int(20),
  `begvizzycan` int(20),
  `begtopocase` int(20),
  `begtopocan` int(20),
  `begrdccase` int(20),
  `begrdccan` int(20),
  `begrdmcase` int(20),
  `begrdmcan` int(20),
  `begbstcase` int(20),
  `begbstcan` int(20),
  `begwatercase` int(20),
  `begwaterbottle` int(20)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

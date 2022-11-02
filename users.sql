
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'coy', 'Coy Gause', 'ncgause11'),
(2, 'grace', 'Grace Hagaman', '12345'),
(3, 'peyton', 'Peyton Cline', '12345'),
(4, 'chris', 'Chris Reddy', '12345');

-- Database: `superglobals`
--

CREATE DATABASE Superglobals39;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE customers (
  CustomerID int NOT NULL AUTO_INCREMENT,
  Username varchar(25) NOT NULL,
  Password varchar(20) NOT NULL,
  FirstName varchar(50) NOT NULL,
  LastName varchar(50) NOT NULL,
  DateofBirth date DEFAULT NULL,
  PhoneNo varchar(15) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  PRIMARY KEY (CustomerID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

--
-- Dumping data for table `customers`
--

INSERT INTO customers (Username, Password, FirstName, LastName, DateofBirth, PhoneNo, Email) VALUES
('mauraw', 'wmaura', 'Maura', 'Watkinson', '1990-03-17', '0796253372', 'mw@gmail.com'),
('afuad', 'dafua', 'Afua', 'Danquah', '1991-04-17', '07827323422', 'abd@gmail.com'),
('tomii', 'itomi', 'Tomi', 'Ibirogba', '1992-05-17', '07732153532', 'ti@gmail.com'),
('zaraz', 'zzara', 'Zara', 'Zatzu', '1993-06-17', '07832847283', 'zz@gmail.com'),
('ciarap', 'pciara', 'Ciara', 'Pimley', '1994-07-17', ' ', 'cp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE Treatments (
   TreatmentID int NOT NULL AUTO_INCREMENT,
   TreatmentName varchar(100) NOT NULL,
   Duration int(11) NOT NULL,
   Price double default 0 NOT NULL,
   Description text,
   PRIMARY KEY (TreatmentID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

--
-- Dumping data for table `treatments`
--

INSERT INTO treatments (TreatmentName, Duration, Price, Description) VALUES
('Massage', '45', '20', 'Deep Tissue Massage'),
('Laser', '60', '50', 'Hair Removal - Face'),
('Facial', '60', '40', 'Hydrafacial' );

--
-- Table structure for table `appointments booking`
--

CREATE TABLE appointments (
  AppointmentID int NOT NULL AUTO_INCREMENT,
  CustomerID int,
  TreatmentID int,
  Date date NOT NULL,
  StartTime time NOT NULL,
  PRIMARY KEY (AppointmentID),
  FOREIGN KEY (CustomerID) REFERENCES customers(CustomerID),
  FOREIGN KEY (TreatmentID) REFERENCES treatments(TreatmentID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

--
-- Dumping data for table `appointments booking`
--

INSERT INTO appointments (CustomerID, TreatmentID, Date, StartTime) VALUES
('4', '3', '2020-03-12', '140000'),
('1', '2', '2020-03-13', '150000'),
('2', '1', '2020-03-15', '160000');
--
-- Indexes for table `appointments booking`
--
-- ALTER TABLE `appointments booking`
-- ADD PRIMARY KEY (`AppointmentID`),
-- ADD KEY `FK` (`CustomerID`,`TreatmentID`);

--
-- Indexes for table `customers`
--
-- ALTER TABLE `customers`
-- ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `treatments`
--
-- ALTER TABLE `treatments`
-- ADD PRIMARY KEY (`TreatmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments booking`
--
-- ALTER TABLE `appointments booking`
-- MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
-- ALTER TABLE `customers`
-- MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `treatments`
--
-- ALTER TABLE `treatments`
-- MODIFY `TreatmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

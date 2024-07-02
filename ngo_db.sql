CREATE TABLE IF NOT EXISTS
    donation_tbl(
        Name VARCHAR(50) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        Phone VARCHAR(10) NOT NULL,
        Gender VARCHAR(10) NOT NULL,
        Age INT NOT NULL,
        Donated_amount INT NOT NULL,
        Payment_mode VARCHAR(50) NOT NULL,
        Payment_date DATETIME DEFAULT CURRENT_TIMESTAMP
    );
CREATE TABLE IF NOT EXISTS
   registered_user(
         Firstname VARCHAR(50) NOT NULL,
         Lastname VARCHAR(50) NOT NULL,
         Email VARCHAR(50) PRIMARY KEY,
         Contact VARCHAR(10),
         Password VARCHAR(30)
     );

CREATE TABLE IF NOT EXISTS
      volunteer_tbl  (
            -- id INT(6) UNSIGNED AUTO_INCREMENT,
            fldName VARCHAR(50) NOT NULL,
            fldEmail VARCHAR(50) NOT NULL,
            fldPhone VARCHAR(10) NOT NULL,
            fldGender VARCHAR(10) NOT NULL,
            fldLocation VARCHAR(150) NOT NULL,
            fldEvent TEXT NOT NULL
        );
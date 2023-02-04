-- Database name : ecommerce

-- *************************
-- *************************

-- Creating Users Table.

CREATE TABLE users (

    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- Inserting Dummy Data Into Users Table. 

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('1', 'Hilal Ahmad', 'hilaldev123@gmail.com', 'Ajk_573@ceo');
INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('2', 'Jawad Ali', 'jawad@gmail.com', 'jawad1234');
INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('3', 'Adnan Wali', 'adnan@gmail.com', 'adnan1234');
INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('4', 'Asim Qari', 'asim@gmail.com', 'asim1234');
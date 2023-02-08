-- *************************
-- *************************


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

-- Creating User Info Table 

CREATE TABLE user_info (

  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(255) NOT NULL,
  user_email VARCHAR(255) NOT NULL,
  user_address VARCHAR(255) NOT NULL,
  user_city VARCHAR(255) NOT NULL,
  user_phone VARCHAR(255) NOT NULL,
  user_gender ENUM('Male', 'Female') NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Inserting Dummy Data Into Users Table. 

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('1', 'Hilal Ahmad', 'hilaldev123@gmail.com', 'Ajk_573@ceo');
INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('2', 'Jawad Ali', 'jawad@gmail.com', 'jawad1234');
INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('3', 'Adnan Wali', 'adnan@gmail.com', 'adnan1234');
INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES ('4', 'Asim Qari', 'asim@gmail.com', 'asim1234');

-- Inserting Dummy Data Into user_info Table 

INSERT INTO `user_info` (`id`, `user_name`, `user_email`, `user_address`, `user_city`, `user_phone`, `user_gender`, `user_id`) VALUES ('1', 'Hilal Ahmad', 'hilaldev123@gmail.com', 'Kaloshah fazalabad takht bhai mardan', 'Mardan', '03096773855', 'Male', '1');

INSERT INTO `user_info` (`id`, `user_name`, `user_email`, `user_address`, `user_city`, `user_phone`, `user_gender`, `user_id`) VALUES ('2', 'Jawad Ali', 'jawad@gmail.com', 'sheikh yousaf mardan', 'Mardan', '03369854721', 'Male', '2');

-- Updating user_info record

UPDATE `user_info` SET `user_name` = 'Jawad Ali1234', `user_email` = 'jawad@gmail.com1234', `user_address` = 'afadfadfdfadfadfadf4', `user_city` = 'afdfasdf4', `user_phone` = '033671268045', `user_gender` = 'Female' WHERE `user_info`.`id` = 6;
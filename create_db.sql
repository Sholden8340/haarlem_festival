SELECT * FROM users;

drop table users;


CREATE TABLE roles (
roleID INT PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(255)
);

/*Roles inset values*/
INSERT INTO roles (type) VALUES ('SuperAdministrator');
INSERT INTO roles (type) VALUES ('Administrator');
INSERT INTO roles (type) VALUES ('Volunteer');
INSERT INTO roles (type) VALUES ('Customer');

SELECT * FROM roles;

CREATE TABLE admin(
adminID INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(255),
password VARCHAR(255),
roleID INT,
FOREIGN KEY (roleID) REFERENCES roles(roleID)
);

SELECT * FROM admin;

INSERT INTO admin(email, password, roleID) VALUES ('text@outlook.com','password',1);

/*Stoped here*/

CREATE TABLE users (
userID INT PRIMARY KEY AUTO_INCREMENT,
firstname VARCHAR(255) NOT NULL ,
lastname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
roleID INT NOT NULL,
FOREIGN KEY (roleID) REFERENCES roles(roleID)
);

SELECT * FROM users;


CREATE TABLE user_address(
user_address_id INT PRIMARY KEY AUTO_INCREMENT,
userID INT,
addressID INT,
FOREIGN KEY (userID) REFERENCES users(userID),
FOREIGN KEY (addressID) REFERENCES address(addressID)
);
CREATE TABLE `order` (
    order_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customer_id INT(10) UNSIGNED NOT NULL,
    order_date DATETIME,
    total FLOAT(10) NOT NULL
);

CREATE TABLE order_status(
orderStatusID INT PRIMARY KEY AUTO_INCREMENT,
status VARCHAR(255)
);

CREATE TABLE orders(
orderID INT PRIMARY KEY AUTO_INCREMENT,
userID INT,
totalPrice DOUBLE,
orderStatusID INT,
FOREIGN KEY (userID) REFERENCES users(userID)
);
CREATE TABLE `location`(
    location_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    location_name VARCHAR(50),
    location_description VARCHAR(500),
    capacity INT(4) UNSIGNED
);
CREATE TABLE `event` (
    event_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(50),
    category VARCHAR(50) NOT NULL CHECK (category IN ("jazz", "dance", "history", "food")),
    start_time DATETIME,
    end_time DATETIME,
    location_id INT(10) UNSIGNED,
    FOREIGN KEY (location_id) REFERENCES `location`(location_id)
);
CREATE TABLE `artist` (
    artist_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    artist_name VARCHAR(50) UNIQUE,
    artist_description VARCHAR(5000),
    genre VARCHAR(50),
    image MEDIUMBLOB,
    facebook_link VARCHAR(200),
    twitter_link VARCHAR(200),
    instagram_link VARCHAR(200),
    youtube_link VARCHAR(200)
);
CREATE TABLE `jazz_event` (
    event_id INT(10) UNSIGNED PRIMARY KEY,
    artist_id INT(10) UNSIGNED,
    FOREIGN KEY (artist_id) REFERENCES artist(artist_id),
    FOREIGN KEY (event_id) REFERENCES `event`(event_id)
);

CREATE TABLE order_ticket(
orderID INT,
ticketID INT,
quantity INT,
FOREIGN KEY (orderID) REFERENCES orders(orderID),
FOREIGN KEY (ticketID) REFERENCES ticket(ticketID),
PRIMARY KEY (orderID,ticketID)
);

CREATE TABLE












drop database if exists sotongLeaderboard;
create database sotongLeaderboard;
use sotongLeaderboard;
CREATE TABLE sotongLeaderboard (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) DEFAULT NULL,
	rlgl INT not null,
	tow FLOAT not null,
	marble INT not null,
	glass INT not null,
	total FLOAT not null
);
drop database if exists Sotong_Leaderboard;
create database Sotong_Leaderboard;
use Sotong_Leaderboard;
CREATE TABLE Sotong_Leaderboard (
	ID integer AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(50) DEFAULT NULL,
	RLGL FLOAT not null,
	TOW FLOAT not null,
	Marble INT not null,
	Glass FLOAT not null
);

USE se266_erik;

CREATE TABLE IF NOT EXISTS test (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        dataone VARCHAR(150) DEFAULT NULL,
	datatwo VARCHAR(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
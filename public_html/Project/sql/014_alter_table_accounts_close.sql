ALTER table `Accounts` ADD COLUMN `open/closed` TINYINT(1)
DEFAULT 1
COMMENT 'Boolen Of Open/Closed Accounts 0 is closed, 1 is open'
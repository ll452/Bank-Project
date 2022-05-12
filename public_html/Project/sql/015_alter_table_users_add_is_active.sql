ALTER table `Users` ADD COLUMN `is_active` TINYINT(1)
DEFAULT 1
COMMENT 'Boolen Of Activated/Deactivated Users 0 is not active, 1 is active'
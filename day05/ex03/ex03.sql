INSERT INTO ft_table (`login`, `group`, `creation_date`)
ALTER TABLE ft_table
ADD `other`()
SELECT `last_name`, `other` AS `group`, `birthdate`
FROM user_card
WHERE
		(length(`last_name`) < 9) AND
		(`last_name` LIKE '%a%')
ORDER BY `last_name` ASC
LIMIT 10;

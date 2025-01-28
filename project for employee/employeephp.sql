SELECT `info`.`first name`,
    `info`.`lastname`,
    `info`.`designation`,
    `info`.`department`,
    `info`.`employee phone number`
FROM `hr`.`info`;
DELETE  FROM`hr`.`info`
WHERE `employee phone number` = '368030';

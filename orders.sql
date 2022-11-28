CREATE TABLE `orders` (
  `order_id` INT(11) AUTO_INCREMENT NOT NULL,
  `customer_id` INT(11) NOT NULL,
  `order_date` DATE DEFAULT CURRENT_TIMESTAMP NOT NULL,
  `postage`  INT(50) NOT NULL,
  `order_value` INT(50) NOT NULL,
  PRIMARY KEY (`order_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `customers`(`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
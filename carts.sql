CREATE TABLE `carts` (
  `cart_id` int(11) AUTO_INCREMENT NOT NULL,
  `item_id` INT(11) NOT NULL,
  `customer_id` INT(11) NOT NULL,
  `cart_quantity` INT(6) NOT NULL,
  `cart_date` DATE DEFAULT CURRENT_TIMESTAMP NOT NULL,
  PRIMARY KEY (`cart_id`),
  FOREIGN KEY (`item_id`) REFERENCES `items`(`item_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `customers`(`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
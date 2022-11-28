CREATE TABLE `order_items` (
  `order_item_id` INT(11) AUTO_INCREMENT NOT NULL,
  `item_id` INT(11) NOT NULL,
  `order_id` INT(11) NOT NULL,
  `order_item_quantity`  INT(10) NOT NULL,
  `order_item_date` DATE DEFAULT CURRENT_TIMESTAMP NOT NULL,
  `purchase_price`  INT(50) NOT NULL,
  PRIMARY KEY (`order_item_id`),
  FOREIGN KEY (`item_id`) REFERENCES `items`(`item_id`),
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
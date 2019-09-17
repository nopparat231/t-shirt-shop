--------------------------shop_products------------------------------

CREATE TABLE `shop_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` int(11) NOT NULL
) ;

INSERT INTO `shop_products` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`) VALUES
(1, 'Apple iPhone', 'The iPhone 7, with its amazing features and drool-worthy design, looks every bit as efficient as it is. With a powerful processor and ample internal storage, this smartphone offers you a seamless performance.', 'APPM01', 'apple-iphone-7.jpeg', 39999),
(2, 'Samsung On5', 'With a leathery feel, the Samsung Galaxy On5 has a classy look with a thin frame that provides you a comfortable steady grip. The quick launch feature in the phone lets you capture moments easily by pushing the home button twice. With a Palm Gesture Selfie feature, a wide viewing angle and the Beauty Shot mode, the camera gives you rewarding selfie experiences.', 'SAMM01', 'samsung-galaxy-on5.jpeg', 7990),
(3, 'OPPO F3 Plus', '\r\nFeaturing a 1.95 GHz Qualcomm Snapdragon MSM8976 Pro processor, an Adreno 510 GPU and 4 GB of RAM, the OPPO F3 Plus offers fast and fluid multitasking. It comes with a 4000-mAh battery that won’t call it a day until you do.', 'OPPM01', 'oppo-f3-plus.jpeg', 24595),
(4, 'Asus Zenfone', 'Asus Zenfone 3s Max (Gold, 32 GB)  (3 GB RAM)', 'AUSM01', 'asus-zenfone-3s-max.jpeg', 8984);

ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);
  

----------------------------shop_order------------------------------

CREATE TABLE `shop_order` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL,
  `payment_type` varchar(255) NOT NULL
) ;

 
----------------------------shop_order_item------------------------------

CREATE TABLE `shop_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ;

----------------------------shop_payment------------------------------

CREATE TABLE `shop_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

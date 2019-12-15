CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL DEFAULT 'Category'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

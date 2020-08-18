CREATE TABLE article (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE user (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE comment (
   `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `pseudo` varchar(100) NOT NULL,
   `content` text NOT NULL,
   `createdAt` datetime NOT NULL,
   `flag` BOOLEAN NOT NULL,
   `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE role (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `role` (`id`, `name`) VALUES
(1, `admin`),
(2, `user`);

ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `comment`
  ADD KEY `fk_article_id` (`article_id`);

ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`); 

ALTER TABLE `user`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

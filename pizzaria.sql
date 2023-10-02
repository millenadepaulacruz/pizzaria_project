


CREATE TABLE pizza_flavour (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    pizza_id INT NOT NULL,
    flavour_id INT NOT NULL,
    FOREIGN KEY (pizza_id) REFERENCES pizzas(id),
    FOREIGN KEY (flavour_id) REFERENCES flavours(id)
);

SELECT * FROM flavours;

USE pizzaria;
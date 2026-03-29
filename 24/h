CREATE TABLE TbItens Pedido (
    id_item INT PRIMARY KEY AUTO_INCREMENT,
    id_pedido INT,
    id_produto INT,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_pedido)
    REFERENCES
    TbPedidos (id_pedido),
    FOREIGN KEY (id_produto) REFERENCES
    TbProdutos (id_produto)
);

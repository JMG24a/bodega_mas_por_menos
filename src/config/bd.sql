CREATE DATABASE data_uptaeb;

USE data_uptaeb;

CREATE TABLE empleados (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  lastname VARCHAR(255),
  role ENUM('admin', 'empleado'),
  age INT,
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  phone VARCHAR(255),
  address VARCHAR(255),
  reference VARCHAR(255),
  state VARCHAR(255),
  city VARCHAR(255)
);

CREATE TABLE clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  lastname VARCHAR(255),
  age INT,
  dni VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  phone VARCHAR(255),
  address VARCHAR(255),
  reference VARCHAR(255),
  state VARCHAR(255),
  city VARCHAR(255)
);

CREATE TABLE proveedores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  lastname VARCHAR(255),
  age INT,
  email VARCHAR(255) UNIQUE,
  phone VARCHAR(255),
  address VARCHAR(255),
  reference VARCHAR(255),
  state VARCHAR(255),
  city VARCHAR(255),
  factory VARCHAR(255)
);

CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  category VARCHAR(255),
  code INT,
  price DECIMAL(10, 2),
  quantity INT,
  image VARCHAR(255)
);

CREATE TABLE pedidos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  status BOOLEAN,
  paymentmethod VARCHAR(255),
  total DECIMAL(10, 2),
  id_customer INT,
  id_employee INT,
  -- Definición de la clave foránea
  FOREIGN KEY (id_customer) REFERENCES clientes(id),
  FOREIGN KEY (id_employee) REFERENCES empleados(id)
);

CREATE TABLE cuentas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  type ENUM('Empleado', 'Cliente', 'Proveedor'),
  balance DECIMAL(10, 2),
  id_customer INT,
  id_employee INT,
  id_supplier INT,
  -- Definición de la clave foránea
  FOREIGN KEY (id_customer) REFERENCES clientes(id),
  FOREIGN KEY (id_employee) REFERENCES empleados(id),
  FOREIGN KEY (id_supplier) REFERENCES proveedores(id)
);

-- tabla de booteo
CREATE TABLE pedidos_productos (
  id_order INT,
  id_product INT,
  -- Definición de la clave foránea
  FOREIGN KEY (id_order) REFERENCES pedidos(id),
  FOREIGN KEY (id_product) REFERENCES productos(id)
);

CREATE TABLE cuentas_pedidos (
  id_account INT,
  id_order INT,
  -- Definición de la clave foránea
  FOREIGN KEY (id_account) REFERENCES cuentas(id),
  FOREIGN KEY (id_order) REFERENCES pedidos(id)
);

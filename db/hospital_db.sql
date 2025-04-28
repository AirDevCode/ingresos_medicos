CREATE DATABASE hospital_db;

USE hospital_db;

CREATE TABLE personal_medico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    cargo VARCHAR(50) NOT NULL,
    departamento VARCHAR(50) NOT NULL
);

CREATE TABLE registros_ingresos_salidas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_personal INT NOT NULL,
    fecha DATE NOT NULL,
    hora_ingreso TIME,
    hora_salida TIME,
    observaciones TEXT,
    FOREIGN KEY (id_personal) REFERENCES personal_medico(id)
);

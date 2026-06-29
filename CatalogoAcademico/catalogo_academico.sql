CREATE TABLE asignaturas (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre_asignatura VARCHAR(100) NOT NULL,

    nivel VARCHAR(50) NOT NULL,

    docente VARCHAR(100) NOT NULL,

    horas INT NOT NULL

);

INSERT INTO asignaturas (nombre_asignatura, nivel, docente, horas) VALUES
('Programación Web', 'Segundo', 'Ing. Carlos Pérez', 6),
('Base de Datos', 'Segundo', 'Ing. Ana López', 5),
('Desarrollo de Aplicaciones Web', 'Tercero', 'Ing. Luis Gómez', 6),
('Ingeniería de Software', 'Tercero', 'Ing. María Torres', 5),
('Redes de Computadoras', 'Segundo', 'Ing. Pedro Ramírez', 4),
('Sistemas Operativos', 'Segundo', 'Ing. Jorge Castillo', 5),
('Programación Orientada a Objetos', 'Primero', 'Ing. Andrea Mendoza', 6),
('Seguridad Informática', 'Cuarto', 'Ing. Diego Herrera', 4),
('Diseño de Interfaces', 'Tercero', 'Ing. Karla Flores', 4),
('Inteligencia Artificial', 'Cuarto', 'Ing. Ricardo Zambrano', 5);

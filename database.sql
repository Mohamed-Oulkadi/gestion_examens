-- Create 'users' table
CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE
);

-- Create 'roles' table
CREATE TABLE IF NOT EXISTS roles (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(100) NOT NULL UNIQUE
);

-- Create 'comptes' table
CREATE TABLE IF NOT EXISTS comptes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

-- Create 'professors' table
CREATE TABLE professors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Create 'students' table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Create 'courses' table
CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    professor_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (professor_id) REFERENCES professors(id) ON DELETE CASCADE
);

-- Create 'grades' table
CREATE TABLE grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    exam_date DATE NOT NULL,
    grade DECIMAL(5,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

-- Insert roles into 'roles' table
INSERT INTO roles (role_name) VALUES
    ('Admin'),
    ('Etudiant'),
    ('Professeur');

-- Insert users into 'users' table
INSERT INTO users (nom, prenom, email) VALUES
    ('karim', 'yasini', 'jkarimyassin@gmail.com'),
    ('said', 'Sfyani', 'saidSfyani@gmail.com'),
    ('mohammed', 'jibali', 'mohammedjibali@houtmail.com');

-- Insert accounts into 'comptes' table
INSERT INTO comptes (user_id, username, password, role_id) VALUES
    (1, 'karim', 'password1', 1),
    (2, 'said', 'password2', 2),
    (3, 'mohammed', 'password3', 3);
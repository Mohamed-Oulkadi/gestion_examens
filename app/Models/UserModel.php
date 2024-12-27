<?php
class UserModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Ajouter un utilisateur
    public function addUser($nom, $prenom, $email) {
        $query = "INSERT INTO users (nom, prenom, email) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nom, $prenom, $email]);
    }

    // Récupérer un utilisateur par ID
    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Récupérer tous les utilisateurs
    public function getAllUsers() {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Supprimer un utilisateur
    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
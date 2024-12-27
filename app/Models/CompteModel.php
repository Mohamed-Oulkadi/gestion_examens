<?php
class CompteModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Ajouter un compte
    public function addCompte($userId, $username, $password, $roleId) {
        $query = "INSERT INTO comptes (user_id, username, password, role_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$userId, $username, password_hash($password, PASSWORD_DEFAULT), $roleId]);
    }

    // Récupérer un compte par ID
    public function getCompteById($id) {
        $query = "SELECT comptes.*, users.nom, users.prenom, roles.role_name
                  FROM comptes
                  INNER JOIN users ON comptes.user_id = users.id
                  INNER JOIN roles ON comptes.role_id = roles.id
                  WHERE comptes.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Authentifier un utilisateur
    public function authenticate($username, $password) {
        $query = "SELECT * FROM comptes WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);
        $compte = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($compte && password_verify($password, $compte['password'])) {
            return $compte;
        }
        return false;
    }

    // Supprimer un compte
    public function deleteCompte($id) {
        $query = "DELETE FROM comptes WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
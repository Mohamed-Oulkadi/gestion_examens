<?php
class RoleModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Ajouter un rôle
    public function addRole($roleName) {
        $query = "INSERT INTO roles (role_name) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$roleName]);
    }

    // Récupérer un rôle par ID
    public function getRoleById($id) {
        $query = "SELECT * FROM roles WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Récupérer tous les rôles
    public function getAllRoles() {
        $query = "SELECT * FROM roles";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Supprimer un rôle
    public function deleteRole($id) {
        $query = "DELETE FROM roles WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
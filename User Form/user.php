<?php
class User {
    private $db;
    public $name;
    public $email;
    public $password;
    public $role;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register($name, $email, $password, $role) {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->role=$role;
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?,?, ?)");
        $stmt->bind_param('ssss', $this->name, $this->email, $this->password,  $this->role);

        return $stmt->execute();
    }

    public function getUsers() {
        $result = $this->db->query("SELECT user_id, name, email, role FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>

<?php
class User {
    private $db;
    public $name;
    public $email;
    public $password;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $this->name, $this->email, $this->password);

        return $stmt->execute();
    }

    public function getUsers() {
        $result = $this->db->query("SELECT user_id, name, email FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>

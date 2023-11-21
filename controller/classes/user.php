<?php
include ($dirBase . '/app/config/db.php');

class Usuario extends Conexion
{
    private $nombres;
    private $username;

    public function userExists($user, $pwd)
    {
        $md5pwd = md5($pwd);
        $sql = "SELECT * FROM usuarios WHERE num_documento = ? AND password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $md5pwd, PDO::PARAM_STR);
        $stmt->execute();
        $query = $stmt->fetch(PDO::FETCH_OBJ);
        if (!empty($query)) {
            if ($query->estado == '0') {
                echo "Usuario inactivo.";
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    public function setUser($user)
    {
        $sql = "SELECT * FROM usuarios WHERE num_documento = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->execute();
        foreach ($stmt as $currentUser) {
            $this->nombres = $currentUser['nombres'];
            $this->username = $currentUser['documento'];
        }
    }

    public function getNombre()
    {
        return $this->nombres;
    }
}

<?php
include($dirBase . '/app/config/db.php');

class Usuario extends Conexion
{
    private $nombres;
    private $username;

    public function userExists($user, $pwd)
    {
        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->execute();
        $query = $stmt->fetch(PDO::FETCH_OBJ);
        if (!empty($query)) {
            $pwdSession = $query->password;
            if (password_verify($pwd, $pwdSession)) {
                if ($query->estado == '0') {
                    $_SESSION['tittle'] = "Usuario Inactivo";
                    $_SESSION['message'] = "El usuario {$user} se encuentra inactivo en el sistema.";
                    $_SESSION['icon'] = "error";
                    return false;
                }
                return true;
            }
        } else {
            return false;
        }
    }

    public function setUser($user)
    {
        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->execute();
        foreach ($stmt as $currentUser) {
            $this->nombres = $currentUser['nombres'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre()
    {
        return $this->nombres;
    }
}

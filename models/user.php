<?php
require_once __DIR__ . '/Connection.php';

class User{
    public function getAll(){
        $user = [];
        $con = null;

        try{
            $con = getConnection();

            $sql = "SELECT * FROM users";

            $stmt = $con->query($sql);

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }catch{
            echo "Error al obtener usuarios: " . $e->getMessage();
            $users = [];
        } finally{
            if ($conn){
                $conn = null;
            }
        }
        return $users;
    }
}
?>
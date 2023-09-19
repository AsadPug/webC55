<?php
    require_once("action/DAO/Connection.php");
    class SmartLightDAO {

        public static function getLightsStatus() {
            $connection = Connection::getConnection();
            $statement = $connection->prepare("SELECT status, name FROM lights");
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Juste pour les select, permet de retourner un dictionnaire ex : $row["username"] (sinon $row[0])
            $statement->execute();
            $lights_status = $statement->fetchAll();
            return compact("lights_status");
        }

    }
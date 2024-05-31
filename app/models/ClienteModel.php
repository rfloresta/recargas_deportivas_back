<?php

namespace App\Models;

use PDO;
use App\Config\Database;

class ClienteModel {
    private $db;

    public function __construct() {
        $instance = Database::getInstance();
        $this->db = $instance->getConnection();
    }

    public function all() {
        $stmt = $this->db->prepare('call ConsultarRecargasPorPlayerID()');
        $stmt->execute();

        // Obtener los resultados
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Mostrar los resultados
        return $results;
    }

}

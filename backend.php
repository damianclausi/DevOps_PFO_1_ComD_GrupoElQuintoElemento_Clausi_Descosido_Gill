<?php
        header("Content-Type: application/json");
        $data = json_decode(file_get_contents("php://input"), true);
        if (!empty($data["username"]) && !empty($data["password"])) {
          echo json_encode(["status" => "ok"]);
        } else {
          echo json_encode(["status" => "error", "message" => "Datos incompletos"]);
        }
        ?>
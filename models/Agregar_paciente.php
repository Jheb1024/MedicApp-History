<?php

class Agregar extends conectar {

    public function insertar_paciente($p_nom, $p_app, $p_apm, $p_altura, $p_edad, $p_FN, $p_peso, $p_seguro){

        $conectar = parent::conexion();
        parent::set_names();
        $sql = "CALL InsertarPaciente (?,?,?,?,?,?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $p_nom);
        $sql->bindValue(2, $p_app);
        $sql->bindValue(3, $p_apm);
        $sql->bindValue(4, $p_altura);
        $sql->bindValue(5, $p_edad);
        $sql->bindValue(6, $p_FN);
        $sql->bindValue(7, $p_peso);
        $sql->bindValue(8, $p_seguro);
        $sql->execute();
    }
}



?>
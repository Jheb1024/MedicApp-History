<?php

class Consulta{
    private $idConsulta;
    private $idPaciente;
    private $enfermedad;
    private $sintomas;
    private $fechaLlegada;
    private $medicacion;
    private $nombrePaciente;
    private $presionArterial;
    private $temperatura;
    private $coste;
    private $peso;

    function __construct($idConsulta,$idPaciente,$enfermedad,$sintomas,$fechaLlegada,
    $medicacion,$nombrePaciente,$presionArterial,$temperatura,$coste){
        $this->idConsulta = $idConsulta;
        $this->idPaciente = $idPaciente;
        $this->enfermedad = $enfermedad;
        $this->sintomas = $sintomas;
        $this->fechaLlegada = $fechaLlegada;
        $this->medicacion =  $medicacion;
        $this->nombrePaciente = $nombrePaciente;
        $this->presionArterial = $presionArterial;
        $this->temperatura = $temperatura;
        $this->coste = $coste;
    }

    public function setIdConsulta($idConsulta){
        $this->idConsulta = $idConsulta;
    }

    public function getIdConsulta(){
        return $this->idConsulta;
    }

    public function setIdPaciente($idPaciente){
        $this->idPaciente = $idPaciente;
    }

    public function getIdPaciente(){
        return $this->idPaciente;
    }

    public function setEnfermedad($enfermedad){
        $this->enfermedad = $enfermedad;
    }

    public function getIdEnfermedad(){
        return $this->enfermedad;
    }

    public function setSintomas($sintomas){
        $this->sintomas = $sintomas;
    }

    public function getSintomas(){
        return $this->sintomas;
    }

    public function setFechaLlegada($fechaLlegada){
        $this->fechaLlegada = $fechaLlegada;
    }

    public function getFechaLlegada(){
        return $this->fechaLlegada;
    }

    public function setMedicacion($medicacion){
        $this->medicacion = $medicacion;
    }

    public function getMedicacion(){
        return $this->medicacion;
    }

    public function setNombrePaciente($nombrePaciente){
        $this->nombrePaciente = $nombrePaciente;
    }

    public function getNombrePaciente(){
        return $this->nombrePaciente;
    }

    public function setPresionArterial($presionArterial){
        $this->presionArterial = $presionArterial;
    }

    public function getPresionArterial(){
        return $this->presionArterial;
    }

    public function setTemperatura($temperatura){
        $this->temperatura = $temperatura;
    }

    public function getTemperatura(){
        return $this->temperatura;
    }

    public function setCoste($coste){
        $this->coste = $coste;
    }

    public function getCoste(){
        return $this->coste;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }


}

?>
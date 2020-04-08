<?php

    /**
     * LA CLASE TRATA DE LOS CONTRATOS
     */
    class contratos extends empleados
    {
        //CREACION ATRIBUTOS
        private $id_cotratos; #int
        private $referencia; #int
        private $titulo_trabajo; #string
        private $nombre_servicio; #string
        private $salario; #double
        private $complementos; #string
        private $duracion_prueba; #datetime
        private $duracion; #datetime
        private $duracion_planificada; #datetime
        private $afiliacion; #string
        private $seguro_salud; #string
        private $situacion; #string
        private $regimen_laborar; #string
        
        function __construct()
        {
            
        }

        //DATABASE METHOD
        public function crear()
        {

        }

        public function eliminar()
        {

        }

        public function consultar()
        {

        }

        //SETTER AND GETTER METHOD
        public function setIdcontratos($id_cotratos)
        {
            $this-> id_contratos=$id_cotratos;
        }

        public function getIdcontratos()
        {
            return $this->id_cotratos;
        }

        public function setReferencia($referencia)
        {
            $this-> referencia=$referencia;
        }

        public function getReferencia()
        {
            return $this->referencia;
        }

        public function setTitulotrabajo($titulo_trabajo)
        {
            $this-> titulo_trabajo=$titulo_trabajo;
        }

        public function getTitulotrabajo()
        {
            return $this->titulo_trabajo;
        }

        public function setNombreservicio($nombre_servicio)
        {
            $this-> nombre_servicio=$nombre_servicio;
        }

        public function getNombreservicio()
        {
            return $this->nombre_servicio;
        }

        public function setSalario($salario)
        {
            $this-> salario=$salario;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        public function setComplementos($complementos)
        {
            $this-> complementos=$complementos;
        }

        public function getComplementos()
        {
            return $this->complementos;
        }

        public function setDuracionprueba($duracion_prueba)
        {
            $this-> duracion_prueba=$duracion_prueba;
        }

        public function getDuracionprueba()
        {
            return $this->duracion_prueba;
        }

        public function setDuracion($duracion)
        {
            $this-> duracion=$duracion;
        }

        public function getDuracion()
        {
            return $this->duracion;
        }

        public function setDuracionplanificada($duracion_planificada)
        {
            $this-> duracion_planificada=$duracion_planificada;
        }

        public function getDuracionplanificada()
        {
            return $this->duracion_planificada;
        }

        public function setAfiliacion($afiliacion)
        {
            $this-> afiliacion=$afiliacion;
        }

        public function getAfiliacion()
        {
            return $this->afiliacion;
        }

        public function setSegurosalud($seguro_salud)
        {
            $this-> seguro_salud=$seguro_salud;
        }

        public function getSegurosalud()
        {
            return $this->seguro_salud;
        }

        public function setSituacion($situacion)
        {
            $this-> situacion=$situacion;
        }

        public function getSituacion()
        {
            return $this->situacion;
        }

        public function setRegimenlaboral($regimen_laborar)
        {
            $this-> regimen_laborar=$regimen_laborar;
        }

        public function getRegimenlaboral()
        {
            return $this->regimen_laborar;
        }

    }

    
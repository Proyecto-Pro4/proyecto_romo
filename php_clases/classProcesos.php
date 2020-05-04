<?php

    /**
    * LA CLASE TRATA DE LOS PROCESOS
    */

    class procesos
    {
        private $id_proceso;
        private $nombre;
        private $descripcion;

        function __construct()
        {
            
        }

        public function crear()
        {

        }

        public function eliminar()
        {
            
        }

        public function editar()
        {
            
        }

        public function consultar()
        {
            
        }

        public function listar()
        {
            
        }

        public function setIdproceso($id_proceso)
        {
            $this->id_proceso=$id_proceso;
        }

        public function getIdproceso()
        {
            return $this->id_proceso;
        }

        public function setNombre($nombre)
        {
            $this->nombre=$nombre;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setDescripcion($descripcion)
        {
            $this->descripcion=$descripcion;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }
    }
    
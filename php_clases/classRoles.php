<?php

    /**
     * LA CLASE TRATA DE LOS ROLES
     */

    class roles
    {
        private $id_rol;
        private $descripcion;

        function __construct()
        {
            
        }

        public function crear()
        {

        }

        public function editar()
        {

        }

        public function eliminar()
        {

        }

        public function listar()
        {

        }

        public function consultar()
        {

        }

        public function setIdrol($id_rol)
        {
            $this->id_rol=$id_rol;
        }

        public function getIdrol()
        {
            return $this->id_rol;
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
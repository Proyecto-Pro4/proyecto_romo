<?php

    /**
     * LA CLASE TRATA DE LOS SUCURSALES
     */

     class sucursales
     {
        private $id_sucursal;
        private $nombre_empresa;
        private $id_ciudad;
        private $direccion;

        function __construct()
        {

        }

        public function setIdsucursal($id_sucursal)
        {
            $this->id_sucursal=$id_sucursal;
        }

        public function getIdsucursal()
        {
            return $this->id_sucursal;
        }

        public function setNombreempresa($nombre_empresa)
        {
            $this->nombre_empresa=$nombre_empresa;
        }

        public function getNombreempresa()
        {
            return $this->nombre_empresa;
        }

        public function setIdciudad($id_ciudad)
        {
            $this->id_ciudad=$id_ciudad;
        }

        public function getIdciudad()
        {
            return $this->id_ciudad;
        }

        public function setDireccion($direccion)
        {
            $this->direccion=$direccion;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }
     }
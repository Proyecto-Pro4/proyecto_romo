<?php

    /**
     * LA CLASE TRATA DE LOS EMPLEADOS
     */
    class empresas
    {
        private $id_empresa;
        private $nombre_empresa;
        private $descripcion;
        private $nit; #int
        private $telefono;
        private $email;
        private $direccion;
        private $numero_empleados;
        private $sector;
        private $id_ciudad;

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

        public function listar()
        {
            
        }

        public function consultar()
        {
            
        }

        public function setIdempresa($id_empresa)
        {
            $this->id_empresa=$id_empresa;
        }

        public function getIdempresa()
        {
            return $this->id_empresa;
        }

        public function setNombreempresa($nombre_empresa)
        {
            $this->nombre_empresa=$nombre_empresa;
        }

        public function getNombreempresa()
        {
            return $this->nombre_empresa;
        }

        public function setDescripcion($descripcion)
        {
            $this->descripcion=$descripcion;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        public function setNit($nit)
        {
            $this->nit=$nit;
        }

        public function getNit()
        {
            return $this->nit;
        }

        public function setTelefono($telefono)
        {
            $this->telefono=$telefono;
        }

        public function getTelefono()
        {
            return $this->telefono;
        }

        public function setEmail($email)
        {
            $this->email=$email;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setDireccion($direccion)
        {
            $this->direccion=$direccion;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }

        public function setNumeroempledos($numero_empleados)
        {
            $this->numero_empleados=$numero_empleados;
        }

        public function getNumeroempleados()
        {
            return $this->numero_empleados;
        }

        public function setSector($sector)
        {
            $this->sector=$sector;
        }

        public function getSector()
        {
            return $this->sector;
        }

        public function setIdciudad($id_ciudad)
        {
            $this->id_ciudad=$id_ciudad;
        }

        public function getIdciudad()
        {
            return $this->id_ciudad;
        }
    }
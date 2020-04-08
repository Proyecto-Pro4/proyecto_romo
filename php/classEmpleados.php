<?php

    /**
     * LA CLASE TRATA DE LOS EMPLEADOS
     */ 
    class empleados
    {
        //CREACION ATRIBUTOS
        private $id_empleado;
        private $nombre;
        private $identificacion;
        private $cargo;
        private $usuario;
        private $clave;
        private $estado;
        public  $id_rol;

        function __construct()
        {
            
        }

        public function consultar()
        {

        }

        public function setIdempleados($id_empleado)
        {
            $this->id_empleado=$id_empleado;
        }

        public function getIdempleado()
        {
            return $this->id_empleado;
        }

        public function setNombre($nombre)
        {
            $this->nombre=$nombre;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setIdentificacion($identificacion)
        {
            $this->identificacion=$identificacion;
        }

        public function getIdentificacion()
        {
            return $this->identificacion;
        }

        public function setCargo($cargo)
        {
            $this->cargo=$cargo;
        }

        public function getCargo()
        {
            return $this->cargo;
        }

        public function setUsuario($usuario)
        {
            $this->usuario=$usuario;
        }

        public function getUsuario()
        {
            return $this->usuario;
        }

        public function setClave($clave)
        {
            $this->clave=$clave;
        }

        public function getClave()
        {
            return $this->clave;
        }

        public function setEstado($estado)
        {
            $this->estado=$estado;
        }

        public function getEstado()
        {
            return $this->estado;
        }

        public function setIdrol($id_rol)
        {
            $this->id_rol=$id_rol;
        }

        public function getIdrol()
        {
            return $this->id_rol;
        }
        
    }
<?php
    /**
     * LA CLASE TRATA DE LOS USUARIOS
     */ 
    class usuarios
    {
        //CREACION ATRIBUTOS
        private $id_usuario;
        private $clave;
        private $correo;
        public  $id_rol;
        private $id_empleado;

        function __construct()
        {
            
        }

        public function setUsuario($id_usuario)
        {
            $this->id_usuario=$id_usuario;
        }

        public function getUsuario()
        {
            return $this->id_usuario;
        }

        public function setClave($clave)
        {
            $this->clave=$clave;
        }

        public function getClave()
        {
            return $this->clave;
        }

        public function setCorreo($correo)
        {
            $this->correo=$correo;
        }

        public function getCorreo()
        {
            return $this->correo;
        }

        public function setIdrol($id_rol)
        {
            $this->id_rol=$id_rol;
        }

        public function getIdrol()
        {
            return $this->id_rol;
        }

        public function setIdempleado($id_empleado)
        {
            $this->id_empleado=$id_empleado;
        }

        public function getIdempleado()
        {
            return $this->id_empleado;
        }
    }
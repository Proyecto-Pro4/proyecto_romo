<?php
    /**
     * LA CLASE TRATA DE LAS CIUDADES
     */
    
     class ciudades
     {
        private $id_ciudad;
        private $nombre_ciudad;
        private $id_pais;

        function __construct()
        {
            
        }

        public function setIdciudad($id_ciudad)
        {
            $this->id_ciudad=$id_ciudad;
        }

        public function getIdciudad()
        {
            return $this->id_ciudad;
        }

        public function setNombreciudad($nombre_ciudad)
        {
            $this->nombre_ciudad=$nombre_ciudad;
        }

        public function getNombreciudad()
        {
            return $this->nombre_ciudad;
        }

        public function setIdpais($id_pais)
        {
            $this->id_pais=$id_pais;
        }

        public function getIdpais()
        {
            return $this->id_pais;
        }
     }
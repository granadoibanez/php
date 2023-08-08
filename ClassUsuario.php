<?php

	class Usuario{

		private $strNombre;
		private $strEmail;
		private $strTipo;
		private $strClave;
		protected $strFechaRegistro;
		static $strEstado = "Activo";

		function __construct(string $nombre, string $email, string $tipo)
		{
			$this->strNombre = $nombre;
			$this->strEmail = $email;
			$this->strTipo = $tipo;
			$this->strClave = rand();
		}

	}//End class usuario

 ?>
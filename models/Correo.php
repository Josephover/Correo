<?php

class Correo
{
    public $remitente;
    public $destinatario;
    public $asunto;
    public $descripcion;
    public $archivo;

    public function __construct($remitente, $destinatario, $asunto, $descripcion, $archivo = null)
    {
        $this->remitente = $remitente;
        $this->destinatario = $destinatario;
        $this->asunto = $asunto;
        $this->descripcion = $descripcion;
        $this->archivo = $archivo;
    }
}
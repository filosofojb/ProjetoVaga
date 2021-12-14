<?php

class PLANOS
{
    private $quantidade;
    private $tipo;
    private $valor;








/**
 * Get the value of valor
 */ 
public function getvalor()
{
return $this->valor;
}

/**
 * Set the value of valor
 *
 * @return  self
 */ 
public function setvalor($valor)
{
$this->valor = $valor;

return $this;
}

/**
 * Get the value of tipo
 */ 
public function getTipo()
{
return $this->tipo;
}

/**
 * Set the value of tipo
 *
 * @return  self
 */ 
public function setTipo($tipo)
{
$this->tipo = $tipo;

return $this;
}

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }
}
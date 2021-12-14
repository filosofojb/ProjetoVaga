<?php


class TV{


private $quantidade;
private $polegadas;
private $valor;
private $total;


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

/**
 * Get the value of polegadas
 */ 
public function getPolegadas()
{
return $this->polegadas;
}

/**
 * Set the value of polegadas
 *
 * @return  self
 */ 
public function setPolegadas($polegadas)
{
$this->polegadas = $polegadas;

return $this;
}

/**
 * Get the value of valor
 */ 
public function getValor()
{
return $this->valor;
}

/**
 * Set the value of valor
 *
 * @return  self
 */ 
public function setValor($valor)
{
$this->valor = $valor;

return $this;
}

/**
 * Get the value of total
 */ 
public function getTotal()
{
return $this->total;
}

/**
 * Set the value of total
 *
 * @return  self
 */ 
public function setTotal($total)
{
$this->total = $total;

return $this;
}
}
<?php

class ORCAMENTO
{

private $mensalidade;
private $investimento;
private $maodeobra;



/**
 * Get the value of maodeobra
 */ 
public function getMaodeobra()
{
return $this->maodeobra;
}

/**
 * Set the value of maodeobra
 *
 * @return  self
 */ 
public function setMaodeobra($maodeobra)
{
$this->maodeobra = $maodeobra;

return $this;
}

/**
 * Get the value of investimento
 */ 
public function getInvestimento()
{
return $this->investimento;
}

/**
 * Set the value of investimento
 *
 * @return  self
 */ 
public function setInvestimento($investimento)
{
$this->investimento = $investimento;

return $this;
}

/**
 * Get the value of mensalidade
 */ 
public function getMensalidade()
{
return $this->mensalidade;
}

/**
 * Set the value of mensalidade
 *
 * @return  self
 */ 
public function setMensalidade($mensalidade)
{
$this->mensalidade = $mensalidade;

return $this;
}
}

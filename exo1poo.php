
<?php

class Compte
{
	// déclaration
	private string $_libelle = 'livret A';
	private float $_solde = 0;
	private string $_devise = "euro";
	private string $_titulaire = "Georges";

	public function __construct($titulaire, $devise, $solde, $libelle)
	{
		$this->_titulaire = $titulaire;
		$this->_devise = $devise;
		$this->_solde = $solde;
		$this->_libelle = $libelle;
	}
	public function __toString()
	{
		$ecrire = $this->_titulaire . $this->_devise . $this->_solde . $this->_libelle;
		return $ecrire;
	}

	public function getLibelle(): string
	{
		return $this->_libelle;
	}

	public function setLibelle(string $libelle)
	{
		$this->_libelle = $libelle;
	}

	public function getSolde(): float
	{
		return $this->_solde;
	}

	public function setSolde(float $solde)
	{
		$this->_solde = $solde;
	}

	public function getDevise(): string
	{
		return $this->_devise;
	}

	public function setDevise(string $devise)
	{
		$this->_devise = $devise;
	}

	public function getTitulaire(): string
	{
		return $this->_titulaire;
	}

	public function setTitulaire(string $titulaire)
	{
		$this->_titulaire = $titulaire;
	}
}

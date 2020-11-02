<?php

class Car 
{
	/**
	* @ var integer
	*/
	private $nbWheels = 4;

	/**
	* @ var integer
	*/
	private $currentSpeed = 0;

	/**
	* @ var string
	*/
	private $color;

	/**
	* @ var integer
	*/
	private $nbSeats;

	/**
	* @ var string
	*/
	private $energy;

	/**
	* @ var integer
	*/
	private $energyLevel = 30;

	public function __construct (string $color, int $nbSeats, string $energy)
	{
		$this->color = $color;
		$this->nbSeats = $nbSeats;
		$this->energy = $energy;
	}

	public function forward()
	{
		$this->currentSpeed = 20;
	}

	public function brake()
	{
		$sentence = '';
		while ($this->currentSpeed > 0) {
			$sentence .= 'Brake. ';

			$this->currentSpeed--;
		}
		$sentence .= '<br />Car is stopped.<br />';

		return $sentence;
	}

	public function start()
	{
		return "Start !";
	}

	public function getNbWheels() : int
	{
		return $this->nbWheels;
	}

	public function getCurrentSpeed() : int
	{
		return $this->currentSpeed;
	}

	/**
	 * @return string
	 */
	public function getColor() : string
	{
		return $this->color;
	}

	public function getNbSeats() : int
	{
		return $this->nbSeats;
	}

	public function getEnergy() : string
	{
		return $this->energy;
	}

	public function getEnergyLevel() : int
	{
		return $this->energyLevel;
	}
}



<?php

class Bicycle
{
	/**
	* @var integer
	*/
	private $nbWheels = 2;

	/**
	* @var integer
	*/
	private $currentSpeed = 0;

	/**
	 * @var string
	 */
	private $color;

	/**
	* @var integer
	*/
	private $nbSeats = 1;

	/**
	 * @var boolean
	 */

	private $hasLuggageRack = false;

	public function __construct(string $color)
	{
		$this->color = $color;
	}

	public function forward()
	{
		$this->currentSpeed = 15;

		return "Go !";
	}

	public function brake(): string
	{
		$sentence = "";
		while ($this->currentSpeed > 0) {
			$this->currentSpeed--;
			$sentence .= "Brake !!! ";
		}
		$sentence .= "<br />I'm stopped !";
		return $sentence;
	}

	/**
	 * @return string
	 */
	public function getColor(): string
	{
		return $this->color;
	}

	/**
	 * @return int
	 */
	public function getCurrentSpeed(): int
	{
		return $this->currentSpeed;
	}

	public function getNbWheels() : int
	{
		return $this->nbWheels;
	}

	public function getNbSeats() : int
	{
		return $this->nbSeats;
	}

	public function hasLuggageRack() : bool
	{
		return $this->hasLuggageRack;
	}
}

?>

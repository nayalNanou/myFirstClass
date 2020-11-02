<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$peugeot = new Car('red', '5', 'gasoline');

echo '<p>';
echo '<strong>Peugeot</strong>';

echo '<br /><br />';

echo 'color: ' . $peugeot->getColor() . '<br />';
echo 'nbSeats : ' . $peugeot->getNbSeats() . '<br />';
echo 'energy : ' . $peugeot->getEnergy() . '<br />';
echo 'nbWheels : ' . $peugeot->getNbWheels() . '<br />';
echo 'energyLevel : ' . $peugeot->getEnergyLevel() . '<br />';
echo 'currentSpeed : ' . $peugeot->getCurrentSpeed() . '<br />';

echo '<br />' . $peugeot->start();

$peugeot->forward();
echo '<br />currentSpeed : ' . $peugeot->getCurrentSpeed();

echo '<br /><br />' . $peugeot->brake();
echo '<br />currentSpeed : ' . $peugeot->getCurrentSpeed();

echo '</p>';


$bmx = new Bicycle('blue');

?>
	<p>
		<strong>BMX</strong>

		<br /><br />

		color : <?php echo $bmx->getColor(); ?><br />
		currentSpeed : <?php echo $bmx->getCurrentSpeed(); ?><br />
		nbWheels : <?php echo $bmx->getNbWheels(); ?><br />
		nbSeats : <?php echo $bmx->getNbSeats(); ?><br />
		hasLuggageRack : <?php echo ($bmx->hasLuggageRack() ? 'yes' : 'no'); ?>

		<br /><br />

		<?php echo $bmx->forward(); ?><br />
		currentSpeed : <?php echo $bmx->getCurrentSpeed(); ?>

		<br /><br />

		<?php echo $bmx->brake(); ?><br /><br />

		currentSpeed : <?php echo $bmx->getCurrentSpeed(); ?>
	</p>
<?php



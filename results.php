<?php
	// get the input from text field
	$bodyWeight = $_POST['bodyWeight'];
  $age = $_POST['age'];
?>
<?php
	// calculate the volume
	$waterIntake = ( $bodyWeight / 2.2 * 40 / 28.3 ) * 0.0295735
?>

<?php
  $waterInkate = number_format($waterIntake, 2);
?>

<h3>Results:</h3>
You should drink <?php echo "$waterIntake" ?> liters of water.
</div>
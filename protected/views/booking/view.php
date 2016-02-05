<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->booking_id,
);

?>

<h1>View Booking #<?php echo $model->booking_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'booking_id',
		'booking_listing_id',
		'booking_user_id',
		'booking_amount',
	),
)); ?>

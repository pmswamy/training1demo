<?php
/* @var $this BookingController */
/* @var $data Booking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->booking_id), array('view', 'id'=>$data->booking_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_listing_id')); ?>:</b>
	<?php echo CHtml::encode($data->booking_listing_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->booking_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_amount')); ?>:</b>
	<?php echo CHtml::encode($data->booking_amount); ?>
	<br />


</div>
<?php
/* @var $this ListingController */
/* @var $data Listing */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->listing_id), array('view', 'id'=>$data->listing_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_owner_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->listing_owner_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_name')); ?>:</b>
	<?php echo CHtml::encode($data->listing_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_address')); ?>:</b>
	<?php echo CHtml::encode($data->listing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_price')); ?>:</b>
	<?php echo CHtml::encode($data->listing_price); ?>
	<br />


</div>
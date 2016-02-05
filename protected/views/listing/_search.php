<?php
/* @var $this ListingController */
/* @var $model Listing */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'listing_id'); ?>
		<?php echo $form->textField($model,'listing_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_owner_user_id'); ?>
		<?php echo $form->textField($model,'listing_owner_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_name'); ?>
		<?php echo $form->textField($model,'listing_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_address'); ?>
		<?php echo $form->textField($model,'listing_address',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_price'); ?>
		<?php echo $form->textField($model,'listing_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
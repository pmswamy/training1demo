<?php
/* @var $this ListingController */
/* @var $model Listing */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Listing', 'url'=>array('index')),
	array('label'=>'Manage Listing', 'url'=>array('admin')),
);
?>

<h1>List a place</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
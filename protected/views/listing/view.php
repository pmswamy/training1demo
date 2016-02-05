<?php
/* @var $this ListingController */
/* @var $model Listing */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	$model->listing_id,
);

$this->menu=array(
	array('label'=>'List Listing', 'url'=>array('index')),
	array('label'=>'Create Listing', 'url'=>array('create')),
	array('label'=>'Update Listing', 'url'=>array('update', 'id'=>$model->listing_id)),
	array('label'=>'Delete Listing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->listing_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Listing', 'url'=>array('admin')),
);
?>

<h1>View Listing #<?php echo $model->listing_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'listing_id',
		'listing_owner_user_id',
		'listing_name',
		'listing_address',
		'listing_price',
	),
)); ?>

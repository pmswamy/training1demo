<?php
/* @var $this BookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bookings',
);

?>

<h1>Bookings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

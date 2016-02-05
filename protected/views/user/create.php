<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>User Registration</h1>
<?php if(!empty($successMsg)){ ?>
	<h2><?php echo $successMsg; ?></h2>
<?php } ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Temases',
);

$this->menu=array(
	array('label'=>'Create Temas','url'=>array('create')),
	array('label'=>'Manage Temas','url'=>array('admin')),
);
?>

<h1>Temases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

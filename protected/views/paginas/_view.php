<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paginaas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_paginaas),array('view','id'=>$data->id_paginaas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_temas')); ?>:</b>
	<?php echo CHtml::encode($data->id_temas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lecciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_lecciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_multimedia')); ?>:</b>
	<?php echo CHtml::encode($data->id_multimedia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenidos')); ?>:</b>
	<?php echo CHtml::encode($data->id_contenidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuarios_lecciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuarios_lecciones); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejemplos')); ?>:</b>
	<?php echo CHtml::encode($data->id_ejemplos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->id_ejercicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fuente_referencias')); ?>:</b>
	<?php echo CHtml::encode($data->id_fuente_referencias); ?>
	<br />

	*/ ?>

</div>

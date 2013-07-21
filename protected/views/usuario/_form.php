<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>


<div class="contenedor-interno">

	<div class="contenedor-interno-login">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre', array('size'=>50,'maxlength'=>50, 'data-placement'=>"right",'placement'=>"right",'rel'=>"tooltip", 'title'=>'Por favor ingrese su usuario')); ?>
		<?php echo $form->error($model,'nombre'); ?></td></tr>
	
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido', array('size'=>50,'maxlength'=>50, 'data-placement'=>"right",'placement'=>"right",'rel'=>"tooltip", 'title'=>'Por favor ingrese su apellido')); ?>
		<?php echo $form->error($model,'apellido'); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email', array('size'=>60,'maxlength'=>100, 'data-placement'=>"right",'placement'=>"right",'rel'=>"tooltip", 'title'=>'Por favor ingrese su correo electronico')); ?>
		<?php echo $form->error($model,'email'); ?>
	
    <div class="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>¡Atento, con estos datos podrás ingresar a Cóndor!</strong>
    </div>
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array('size'=>60,'maxlength'=>128, 'data-placement'=>"right",'placement'=>"right",'rel'=>"tooltip", 'title'=>'Por favor ingrese su usuario')); ?>
		<?php echo $form->error($model,'username'); ?>
	
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array('size'=>60,'maxlength'=>128, 'data-placement'=>"right",'placement'=>"right",'rel'=>"tooltip", 'title'=>'Por favor ingrese su contraseña')); ?>
		<?php echo $form->error($model,'password'); ?>
	
		<?php echo $form->labelEx($model,'perfil'); ?>
		<?php echo $form->dropDownList($model, 'perfil', array('Seleccione su perfil ...!', 'Estudiante', 'Informático', 'DBA', 'Programador', 'Otro')); ?>
		
		<?php echo $form->error($model,'perfil'); ?>
	</div>
		<center><?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'submit',
    'type'=>'primary',
    'label'=>'Guardar',
    'loadingText'=>'loading...',
    'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?></center>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

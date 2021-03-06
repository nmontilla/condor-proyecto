<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'lecciones-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<?php echo $form->dropDownList($model,'id_temas', CHtml::listData(Temas::model()->findAll(), 'id_temas', 'nb_temas'),array('prompt'=>'Seleccione el Tema ...','class'=>'span5')); ?>

<!--	<?/*php echo $form->textFieldRow($model,'id_temas',array('class'=>'span5')); */?>-->

	<?php echo $form->textFieldRow($model,'nb_lecciones',array('class'=>'span5')); ?>

	<div class="form-actions">	
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
			'loadingText'=>'loading...',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

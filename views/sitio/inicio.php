<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

?>
Hola Usuario

<!-- Cargar formulario -->
<?php $formulario=ActiveForm::begin();?>

<br/>
<?= $formulario->field($model,'valora')?>
<br/>

<?= $formulario->field($model,'valorb')?>
<br/>

<div class="form-group">
    <?= Html::submitButton('Enviar',['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
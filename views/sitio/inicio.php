<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

?>
Hola Usuario
<?php
    if($mensaje){
        echo Html::tag('div',Html::encode($mensaje), ['class'=>'alert alert-danger']);
    }
?>


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
<?php

use app\models\Tables;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bookings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bookings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table_id')->dropDownList(
        Tables::find()
        ->select(['name'])
        ->indexBy('id')
        ->column(),
        ['prompt'=>'Выберите мастера']
    ); ?>

    <?= $form->field($model, 'date')->Input('Date') ?>

    <?= $form->field($model, 'time')->dropDownList([
        '08:00:00'=>'08:00',
        '09:00:00'=>'09:00',
        '10:00:00'=>'10:00',
        '11:00:00'=>'11:00',
        '12:00:00'=>'12:00',
        '13:00:00'=>'13:00',
        '14:00:00'=>'14:00',
        '15:00:00'=>'15:00',
        '16:00:00'=>'16:00',
        '17:00:00'=>'17:00',
        '18:00:00'=>'18:00',
    ],
    ['prompt'=>'Выберите время']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

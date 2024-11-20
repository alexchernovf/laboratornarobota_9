<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntryForm */

$this->title = 'Entry Form';
?>

<div class="entry-form-container">
    <h1 class="form-title"><?= Html::encode($this->title) ?></h1>

    <div class="form-description">
        <p>Please fill in your details below:</p>
    </div>

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'custom-form']
    ]); ?>

    <div class="form-group">
        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Your Name'])->label(false) ?>
    </div>

    <div class="form-group">
        <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Your Email'])->label(false) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn-submit']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<style>
    .entry-form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form-description {
        text-align: center;
        font-size: 16px;
        margin-bottom: 30px;
        color: #666;
    }

    .custom-form .form-group {
        margin-bottom: 20px;
    }

    .custom-form input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    .btn-submit {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>

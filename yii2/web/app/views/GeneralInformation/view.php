<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralInformation */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'General Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-information-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_user], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_user], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_user',
            'Name',
            'Surname',
            'Email:email',
            'Sex',
            'DOB',
            'Password',
        ],
    ]) ?>

</div>

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\widgets\ActiveForm;
use frontend\models\Test;
use unclead\multipleinput\MultipleInput;

$model = new Test;

//структура массива - из реального проекта.
//если удалять поля, то очередность индексов выпадает при сохранении
$model->someproperty = [
    0 => 'test1',
    1 => 'test1',
    2 => 'test4',
    //3 был удален
    4 => 'test5',
];
?>
<div class="site-index">
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'someproperty')->widget(MultipleInput::class, [
        'columns'  => [
            [
                'enableError' => true,
                'name'        => 'someproperty',
                'type'        => 'dropDownList',
                'items'       => [
                    'test1' => 'Test1',
                    'test2' => 'Test2',
                    'test3' => 'Test3',
                    'test4' => 'Test4',
                    'test5' => 'Test5',
                ],
            ],
        ],
    ]) ?>
    
    <?php ActiveForm::end(); ?>
</div>

<?php

namespace app\controllers;

use app\models\Country;
use yii\rest\ActiveController;

class CountriesController extends ActiveController
{
    public $modelClass = Country::class;
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            [
                'class' => \yii\filters\ContentNegotiator::className(),
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];
    }
}
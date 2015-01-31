<?php

namespace app\modules\catalog\controllers;

use yii\web\Controller;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use app\models\Product;

class DefaultController extends Controller
{
    public function actionIndex()
    {
		$query = new Query;
		$provider = new ActiveDataProvider([
			'query' => Product::find(),
			'pagination' => [
				'pageSize' => 20,
			],
		]);
		
        return $this->render('index', [
			'provider' => $provider,
		]);
    }
}

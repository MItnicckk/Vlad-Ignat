<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 18.03.2019
 * Time: 11:47
 */

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\controllers\MainController;
use app\models\AddForm;
use app\models\LikeForm;
use app\models\Articles;
use yii\data\Pagination;


class DbWorkingController extends MainController
{
    public function actionIndex()
    {

        $likeForm = new LikeForm;
        $str = new LikeForm;

        $params=[
            'header' => 'Запрос №',
        ];

        return $this->render('index', $params);
    }

    public function actionQuery()
    {
        $likeForm = new LikeForm;
        $str = new LikeForm;


        $query1_1 = Articles::find()->select('Id, Title, Description, Img')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query1_1->count(), 'pageSize' => 1]);
        $posts = $query1_1->offset($pages->offset)->limit($pages->limit)->all();


        $params=[
            'header' => 'Вернуться',
            'query1_1' => $query1_1,
            'model' => $likeForm,
            'posts' => $posts,
            'pages' => $pages,
        ];

        return $this->render('query', compact('posts', 'pages'));
    }

}
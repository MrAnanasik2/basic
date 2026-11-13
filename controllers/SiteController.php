<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Recept;
use app\models\SignupForm;
use app\models\Ingredient;
use yii\web\ForbiddenHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $recepts = Recept::find()->all();
        return $this->render('index', ['recepts' => $recepts]);
    }

    public function actionCalculator(){
        $recepts = Recept::find()->all();
        return $this->render('calculator', ['recepts' => $recepts]);
    }

    public function actionKvass(){
        $recepts = Recept::find()->all();
        return $this->render('kvass', ['recepts' => $recepts]);
    }

    public function actionRecipes(){
        $recepts = Recept::find()->all();
        return $this->render('recipes', ['recepts' => $recepts]);
    }

    public function actionHistory(){
          $recepts = Recept::find()->all();
        return $this->render('history', ['recepts' => $recepts]);
    }






    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        // $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    // Проверка администратора
private function checkAdmin()
{
    if (
        Yii::$app->user->isGuest ||
        !Yii::$app->user->identity->isAdmin()
    ) {
        throw new ForbiddenHttpException('Доступ запрещён');
    }
}

// Страница добавления рецепта
public function actionCreateRecipe()
{
    $this->checkAdmin();

    $model = new Recept();

    // Получаем ингредиенты из базы
    $ingredients = Ingredient::find()
        ->select(['name', 'id'])
        ->indexBy('id')
        ->column();

    if ($model->load(Yii::$app->request->post())) {

        // Пока добавляем только безалкогольные рецепты
        $model->class = 'квас';

        if ($model->validate()) {

            $transaction = Yii::$app->db->beginTransaction();

            try {

                // Сохраняем рецепт
                $model->save(false);

                // Сохраняем выбранные ингредиенты
                foreach ((array)$model->ingredientIds as $ingredientId) {

                    $ingredientId = (int)$ingredientId;

                    if (Ingredient::findOne($ingredientId)) {

                        Yii::$app->db->createCommand()->insert(
                            'ingredients-recept',
                            [
                                'id_recept' => $model->id,
                                'id_ingredients' => $ingredientId,
                            ]
                        )->execute();

                    }
                }

                $transaction->commit();

                return $this->redirect(['recipes']);

            } catch (\Throwable $e) {

                $transaction->rollBack();

                throw $e;
            }
        }
    }

    return $this->render('create-recipe', [
        'model' => $model,
        'ingredients' => $ingredients,
    ]);
}




public function actionSignup()
{
    $model = new SignupForm();

    if ($model->load(Yii::$app->request->post()) && $model->signup()) {
        Yii::$app->session->setFlash(
            'success',
            'Регистрация прошла успешно! Теперь вы можете войти.'
        );

        return $this->redirect(['site/login']);
    }

    return $this->render('signup', [
        'model' => $model,
    ]);
}
}

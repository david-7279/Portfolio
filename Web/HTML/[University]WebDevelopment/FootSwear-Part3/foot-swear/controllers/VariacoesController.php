<?php

namespace app\controllers;

use app\models\Variacoes;
use app\models\VariacoesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VariacoesController implements the CRUD actions for Variacoes model.
 */
class VariacoesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Variacoes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new VariacoesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Variacoes model.
     * @param int $id ID
     * @param int $produtos_categoria_id Produtos Categoria ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $produtos_categoria_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $produtos_categoria_id),
        ]);
    }

    /**
     * Creates a new Variacoes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Variacoes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'produtos_categoria_id' => $model->produtos_categoria_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Variacoes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param int $produtos_categoria_id Produtos Categoria ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $produtos_categoria_id)
    {
        $model = $this->findModel($id, $produtos_categoria_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'produtos_categoria_id' => $model->produtos_categoria_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Variacoes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param int $produtos_categoria_id Produtos Categoria ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $produtos_categoria_id)
    {
        $this->findModel($id, $produtos_categoria_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Variacoes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param int $produtos_categoria_id Produtos Categoria ID
     * @return Variacoes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $produtos_categoria_id)
    {
        if (($model = Variacoes::findOne(['id' => $id, 'produtos_categoria_id' => $produtos_categoria_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

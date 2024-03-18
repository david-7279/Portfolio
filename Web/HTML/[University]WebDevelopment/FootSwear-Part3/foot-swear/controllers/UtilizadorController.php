<?php

namespace app\controllers;

use app\models\Utilizador;
use app\models\UtilizadorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtilizadorController implements the CRUD actions for Utilizador model.
 */
class UtilizadorController extends Controller
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
     * Lists all Utilizador models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtilizadorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Utilizador model.
     * @param int $id ID
     * @param int $utilizador_metodo_pagamento_id Utilizador Metodo Pagamento ID
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id1 Utilizador Metodo Pagamento Tipo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_id1 Utilizador Metodo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id11 Utilizador Metodo Pagamento Tipo Pagamento Id11
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11),
        ]);
    }

    /**
     * Creates a new Utilizador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Utilizador();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'utilizador_metodo_pagamento_id' => $model->utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $model->utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $model->utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $model->utilizador_metodo_pagamento_tipo_pagamento_id11]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Utilizador model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param int $utilizador_metodo_pagamento_id Utilizador Metodo Pagamento ID
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id1 Utilizador Metodo Pagamento Tipo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_id1 Utilizador Metodo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id11 Utilizador Metodo Pagamento Tipo Pagamento Id11
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11)
    {
        $model = $this->findModel($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'utilizador_metodo_pagamento_id' => $model->utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $model->utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $model->utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $model->utilizador_metodo_pagamento_tipo_pagamento_id11]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Utilizador model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param int $utilizador_metodo_pagamento_id Utilizador Metodo Pagamento ID
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id1 Utilizador Metodo Pagamento Tipo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_id1 Utilizador Metodo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id11 Utilizador Metodo Pagamento Tipo Pagamento Id11
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11)
    {
        $this->findModel($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Utilizador model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param int $utilizador_metodo_pagamento_id Utilizador Metodo Pagamento ID
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id1 Utilizador Metodo Pagamento Tipo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_id1 Utilizador Metodo Pagamento Id1
     * @param int $utilizador_metodo_pagamento_tipo_pagamento_id11 Utilizador Metodo Pagamento Tipo Pagamento Id11
     * @return Utilizador the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $utilizador_metodo_pagamento_id, $utilizador_metodo_pagamento_tipo_pagamento_id1, $utilizador_metodo_pagamento_id1, $utilizador_metodo_pagamento_tipo_pagamento_id11)
    {
        if (($model = Utilizador::findOne(['id' => $id, 'utilizador_metodo_pagamento_id' => $utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $utilizador_metodo_pagamento_tipo_pagamento_id11])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

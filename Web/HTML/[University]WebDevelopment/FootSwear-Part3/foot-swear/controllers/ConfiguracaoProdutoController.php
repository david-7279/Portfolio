<?php

namespace app\controllers;

use app\models\ConfiguracaoProduto;
use app\models\ConfiguracaoProdutoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConfiguracaoProdutoController implements the CRUD actions for ConfiguracaoProduto model.
 */
class ConfiguracaoProdutoController extends Controller
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
     * Lists all ConfiguracaoProduto models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ConfiguracaoProdutoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ConfiguracaoProduto model.
     * @param int $item_produto_id Item Produto ID
     * @param int $item_produto_id1 Item Produto Id1
     * @param int $item_produto_produtos_id Item Produto Produtos ID
     * @param int $variacoes_opcoes_id Variacoes Opcoes ID
     * @param int $variacoes_opcoes_variacoes_id1 Variacoes Opcoes Variacoes Id1
     * @param int $variacoes_opcoes_variacoes_produtos_categoria_id Variacoes Opcoes Variacoes Produtos Categoria ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id),
        ]);
    }

    /**
     * Creates a new ConfiguracaoProduto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ConfiguracaoProduto();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'item_produto_id' => $model->item_produto_id, 'item_produto_id1' => $model->item_produto_id1, 'item_produto_produtos_id' => $model->item_produto_produtos_id, 'variacoes_opcoes_id' => $model->variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $model->variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $model->variacoes_opcoes_variacoes_produtos_categoria_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ConfiguracaoProduto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $item_produto_id Item Produto ID
     * @param int $item_produto_id1 Item Produto Id1
     * @param int $item_produto_produtos_id Item Produto Produtos ID
     * @param int $variacoes_opcoes_id Variacoes Opcoes ID
     * @param int $variacoes_opcoes_variacoes_id1 Variacoes Opcoes Variacoes Id1
     * @param int $variacoes_opcoes_variacoes_produtos_categoria_id Variacoes Opcoes Variacoes Produtos Categoria ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id)
    {
        $model = $this->findModel($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_produto_id' => $model->item_produto_id, 'item_produto_id1' => $model->item_produto_id1, 'item_produto_produtos_id' => $model->item_produto_produtos_id, 'variacoes_opcoes_id' => $model->variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $model->variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $model->variacoes_opcoes_variacoes_produtos_categoria_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ConfiguracaoProduto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $item_produto_id Item Produto ID
     * @param int $item_produto_id1 Item Produto Id1
     * @param int $item_produto_produtos_id Item Produto Produtos ID
     * @param int $variacoes_opcoes_id Variacoes Opcoes ID
     * @param int $variacoes_opcoes_variacoes_id1 Variacoes Opcoes Variacoes Id1
     * @param int $variacoes_opcoes_variacoes_produtos_categoria_id Variacoes Opcoes Variacoes Produtos Categoria ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id)
    {
        $this->findModel($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ConfiguracaoProduto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $item_produto_id Item Produto ID
     * @param int $item_produto_id1 Item Produto Id1
     * @param int $item_produto_produtos_id Item Produto Produtos ID
     * @param int $variacoes_opcoes_id Variacoes Opcoes ID
     * @param int $variacoes_opcoes_variacoes_id1 Variacoes Opcoes Variacoes Id1
     * @param int $variacoes_opcoes_variacoes_produtos_categoria_id Variacoes Opcoes Variacoes Produtos Categoria ID
     * @return ConfiguracaoProduto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_produto_id, $item_produto_id1, $item_produto_produtos_id, $variacoes_opcoes_id, $variacoes_opcoes_variacoes_id1, $variacoes_opcoes_variacoes_produtos_categoria_id)
    {
        if (($model = ConfiguracaoProduto::findOne(['item_produto_id' => $item_produto_id, 'item_produto_id1' => $item_produto_id1, 'item_produto_produtos_id' => $item_produto_produtos_id, 'variacoes_opcoes_id' => $variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $variacoes_opcoes_variacoes_produtos_categoria_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

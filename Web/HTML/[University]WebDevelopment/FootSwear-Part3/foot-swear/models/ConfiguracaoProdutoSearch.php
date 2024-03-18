<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ConfiguracaoProduto;

/**
 * ConfiguracaoProdutoSearch represents the model behind the search form of `app\models\ConfiguracaoProduto`.
 */
class ConfiguracaoProdutoSearch extends ConfiguracaoProduto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_produto_id', 'item_produto_id1', 'item_produto_produtos_id', 'variacoes_opcoes_id', 'variacoes_opcoes_variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id'], 'integer'],
            [['opcoes_produto'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ConfiguracaoProduto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'item_produto_id' => $this->item_produto_id,
            'item_produto_id1' => $this->item_produto_id1,
            'item_produto_produtos_id' => $this->item_produto_produtos_id,
            'variacoes_opcoes_id' => $this->variacoes_opcoes_id,
            'variacoes_opcoes_variacoes_id1' => $this->variacoes_opcoes_variacoes_id1,
            'variacoes_opcoes_variacoes_produtos_categoria_id' => $this->variacoes_opcoes_variacoes_produtos_categoria_id,
        ]);

        $query->andFilterWhere(['like', 'opcoes_produto', $this->opcoes_produto]);

        return $dataProvider;
    }
}

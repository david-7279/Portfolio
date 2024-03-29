<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Variacoes;

/**
 * VariacoesSearch represents the model behind the search form of `app\models\Variacoes`.
 */
class VariacoesSearch extends Variacoes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produtos_categoria_id'], 'integer'],
            [['categoria_id', 'nome'], 'safe'],
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
        $query = Variacoes::find();

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
            'id' => $this->id,
            'produtos_categoria_id' => $this->produtos_categoria_id,
        ]);

        $query->andFilterWhere(['like', 'categoria_id', $this->categoria_id])
            ->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}

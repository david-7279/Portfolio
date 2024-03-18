<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos_categoria".
 *
 * @property int $id
 * @property string|null $nome-categoria
 *
 * @property Produtos[] $produtos
 * @property Variacoes[] $variacoes
 */
class ProdutosCategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos_categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nome-categoria'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome-categoria' => 'Nome Categoria',
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produtos::class, ['produtos_categoria_id' => 'id']);
    }

    /**
     * Gets query for [[Variacoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVariacoes()
    {
        return $this->hasMany(Variacoes::class, ['produtos_categoria_id' => 'id']);
    }
}

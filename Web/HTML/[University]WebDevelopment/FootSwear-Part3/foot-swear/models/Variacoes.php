<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "variacoes".
 *
 * @property int $id
 * @property string|null $categoria_id
 * @property string|null $nome
 * @property int $produtos_categoria_id
 *
 * @property ProdutosCategoria $produtosCategoria
 * @property VariacoesOpcoes[] $variacoesOpcoes
 */
class Variacoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'variacoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produtos_categoria_id'], 'required'],
            [['id', 'produtos_categoria_id'], 'integer'],
            [['categoria_id', 'nome'], 'string', 'max' => 45],
            [['id', 'produtos_categoria_id'], 'unique', 'targetAttribute' => ['id', 'produtos_categoria_id']],
            [['produtos_categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProdutosCategoria::class, 'targetAttribute' => ['produtos_categoria_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria_id' => 'Categoria ID',
            'nome' => 'Nome',
            'produtos_categoria_id' => 'Produtos Categoria ID',
        ];
    }

    /**
     * Gets query for [[ProdutosCategoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosCategoria()
    {
        return $this->hasOne(ProdutosCategoria::class, ['id' => 'produtos_categoria_id']);
    }

    /**
     * Gets query for [[VariacoesOpcoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVariacoesOpcoes()
    {
        return $this->hasMany(VariacoesOpcoes::class, ['variacoes_id1' => 'id', 'variacoes_produtos_categoria_id' => 'produtos_categoria_id']);
    }
}

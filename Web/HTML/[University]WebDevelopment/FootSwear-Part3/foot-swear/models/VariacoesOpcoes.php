<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "variacoes_opcoes".
 *
 * @property int $id
 * @property string|null $variacoes_id
 * @property string|null $preco
 * @property int $variacoes_id1
 * @property int $variacoes_produtos_categoria_id
 *
 * @property ConfiguracaoProduto[] $configuracaoProdutos
 * @property Variacoes $variacoesId1
 */
class VariacoesOpcoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'variacoes_opcoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'variacoes_id1', 'variacoes_produtos_categoria_id'], 'required'],
            [['id', 'variacoes_id1', 'variacoes_produtos_categoria_id'], 'integer'],
            [['variacoes_id', 'preco'], 'string', 'max' => 45],
            [['id', 'variacoes_id1', 'variacoes_produtos_categoria_id'], 'unique', 'targetAttribute' => ['id', 'variacoes_id1', 'variacoes_produtos_categoria_id']],
            [['variacoes_id1', 'variacoes_produtos_categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Variacoes::class, 'targetAttribute' => ['variacoes_id1' => 'id', 'variacoes_produtos_categoria_id' => 'produtos_categoria_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'variacoes_id' => 'Variacoes ID',
            'preco' => 'Preco',
            'variacoes_id1' => 'Variacoes Id1',
            'variacoes_produtos_categoria_id' => 'Variacoes Produtos Categoria ID',
        ];
    }

    /**
     * Gets query for [[ConfiguracaoProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConfiguracaoProdutos()
    {
        return $this->hasMany(ConfiguracaoProduto::class, ['variacoes_opcoes_id' => 'id', 'variacoes_opcoes_variacoes_id1' => 'variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id' => 'variacoes_produtos_categoria_id']);
    }

    /**
     * Gets query for [[VariacoesId1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVariacoesId1()
    {
        return $this->hasOne(Variacoes::class, ['id' => 'variacoes_id1', 'produtos_categoria_id' => 'variacoes_produtos_categoria_id']);
    }
}

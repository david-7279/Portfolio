<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "configuracao_produto".
 *
 * @property int $item_produto_id
 * @property string|null $opcoes_produto
 * @property int $item_produto_id1
 * @property int $item_produto_produtos_id
 * @property int $variacoes_opcoes_id
 * @property int $variacoes_opcoes_variacoes_id1
 * @property int $variacoes_opcoes_variacoes_produtos_categoria_id
 *
 * @property ItemProduto $itemProdutoId1
 * @property VariacoesOpcoes $variacoesOpcoes
 */
class ConfiguracaoProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'configuracao_produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_produto_id', 'item_produto_id1', 'item_produto_produtos_id', 'variacoes_opcoes_id', 'variacoes_opcoes_variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id'], 'required'],
            [['item_produto_id', 'item_produto_id1', 'item_produto_produtos_id', 'variacoes_opcoes_id', 'variacoes_opcoes_variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id'], 'integer'],
            [['opcoes_produto'], 'string', 'max' => 45],
            [['item_produto_id', 'item_produto_id1', 'item_produto_produtos_id', 'variacoes_opcoes_id', 'variacoes_opcoes_variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id'], 'unique', 'targetAttribute' => ['item_produto_id', 'item_produto_id1', 'item_produto_produtos_id', 'variacoes_opcoes_id', 'variacoes_opcoes_variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id']],
            [['item_produto_id1', 'item_produto_produtos_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemProduto::class, 'targetAttribute' => ['item_produto_id1' => 'id', 'item_produto_produtos_id' => 'produtos_id']],
            [['variacoes_opcoes_id', 'variacoes_opcoes_variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => VariacoesOpcoes::class, 'targetAttribute' => ['variacoes_opcoes_id' => 'id', 'variacoes_opcoes_variacoes_id1' => 'variacoes_id1', 'variacoes_opcoes_variacoes_produtos_categoria_id' => 'variacoes_produtos_categoria_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_produto_id' => 'Item Produto ID',
            'opcoes_produto' => 'Opcoes Produto',
            'item_produto_id1' => 'Item Produto Id1',
            'item_produto_produtos_id' => 'Item Produto Produtos ID',
            'variacoes_opcoes_id' => 'Variacoes Opcoes ID',
            'variacoes_opcoes_variacoes_id1' => 'Variacoes Opcoes Variacoes Id1',
            'variacoes_opcoes_variacoes_produtos_categoria_id' => 'Variacoes Opcoes Variacoes Produtos Categoria ID',
        ];
    }

    /**
     * Gets query for [[ItemProdutoId1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemProdutoId1()
    {
        return $this->hasOne(ItemProduto::class, ['id' => 'item_produto_id1', 'produtos_id' => 'item_produto_produtos_id']);
    }

    /**
     * Gets query for [[VariacoesOpcoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVariacoesOpcoes()
    {
        return $this->hasOne(VariacoesOpcoes::class, ['id' => 'variacoes_opcoes_id', 'variacoes_id1' => 'variacoes_opcoes_variacoes_id1', 'variacoes_produtos_categoria_id' => 'variacoes_opcoes_variacoes_produtos_categoria_id']);
    }
}

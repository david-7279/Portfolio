<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_produto".
 *
 * @property int $id
 * @property string|null $produto-id
 * @property string|null $SKU
 * @property string|null $quantidade
 * @property string|null $imagem
 * @property string|null $preco
 * @property int $produtos_id
 *
 * @property ConfiguracaoProduto[] $configuracaoProdutos
 * @property Produtos $produtos
 */
class ItemProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produtos_id'], 'required'],
            [['id', 'produtos_id'], 'integer'],
            [['imagem'], 'string'],
            [['produto-id', 'quantidade', 'preco'], 'string', 'max' => 45],
            [['SKU'], 'string', 'max' => 13],
            [['id', 'produtos_id'], 'unique', 'targetAttribute' => ['id', 'produtos_id']],
            [['produtos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::class, 'targetAttribute' => ['produtos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'produto-id' => 'Produto ID',
            'SKU' => 'Sku',
            'quantidade' => 'Quantidade',
            'imagem' => 'Imagem',
            'preco' => 'Preco',
            'produtos_id' => 'Produtos ID',
        ];
    }

    /**
     * Gets query for [[ConfiguracaoProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConfiguracaoProdutos()
    {
        return $this->hasMany(ConfiguracaoProduto::class, ['item_produto_id1' => 'id', 'item_produto_produtos_id' => 'produtos_id']);
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::class, ['id' => 'produtos_id']);
    }
}

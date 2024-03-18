<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "linha_encomenda".
 *
 * @property int $id
 * @property string|null $item_produto_id
 * @property string|null $encomenda_id
 * @property string|null $quantidade
 * @property float|null $preco
 * @property int $encomenda_id1
 * @property int $produtos_id
 * @property int $produtos_produtos_categoria_id
 *
 * @property Encomenda $encomendaId1
 * @property Produtos $produtos
 */
class LinhaEncomenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'linha_encomenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'encomenda_id1', 'produtos_id', 'produtos_produtos_categoria_id'], 'required'],
            [['id', 'encomenda_id1', 'produtos_id', 'produtos_produtos_categoria_id'], 'integer'],
            [['preco'], 'number'],
            [['item_produto_id', 'encomenda_id', 'quantidade'], 'string', 'max' => 45],
            [['id', 'encomenda_id1', 'produtos_id', 'produtos_produtos_categoria_id'], 'unique', 'targetAttribute' => ['id', 'encomenda_id1', 'produtos_id', 'produtos_produtos_categoria_id']],
            [['encomenda_id1'], 'exist', 'skipOnError' => true, 'targetClass' => Encomenda::class, 'targetAttribute' => ['encomenda_id1' => 'id']],
            [['produtos_id', 'produtos_produtos_categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::class, 'targetAttribute' => ['produtos_id' => 'id', 'produtos_produtos_categoria_id' => 'produtos_categoria_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_produto_id' => 'Item Produto ID',
            'encomenda_id' => 'Encomenda ID',
            'quantidade' => 'Quantidade',
            'preco' => 'Preco',
            'encomenda_id1' => 'Encomenda Id1',
            'produtos_id' => 'Produtos ID',
            'produtos_produtos_categoria_id' => 'Produtos Produtos Categoria ID',
        ];
    }

    /**
     * Gets query for [[EncomendaId1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendaId1()
    {
        return $this->hasOne(Encomenda::class, ['id' => 'encomenda_id1']);
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::class, ['id' => 'produtos_id', 'produtos_categoria_id' => 'produtos_produtos_categoria_id']);
    }
}

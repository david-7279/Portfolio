<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_carinho_compras".
 *
 * @property int $id
 * @property string|null $carrinho_id
 * @property string|null $produto_item_id
 * @property int|null $quantidade
 * @property int $carinho_compras_id
 *
 * @property CarinhoCompras $carinhoCompras
 */
class ItemCarinhoCompras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_carinho_compras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'carinho_compras_id'], 'required'],
            [['id', 'quantidade', 'carinho_compras_id'], 'integer'],
            [['carrinho_id', 'produto_item_id'], 'string', 'max' => 45],
            [['id', 'carinho_compras_id'], 'unique', 'targetAttribute' => ['id', 'carinho_compras_id']],
            [['carinho_compras_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarinhoCompras::class, 'targetAttribute' => ['carinho_compras_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'carrinho_id' => 'Carrinho ID',
            'produto_item_id' => 'Produto Item ID',
            'quantidade' => 'Quantidade',
            'carinho_compras_id' => 'Carinho Compras ID',
        ];
    }

    /**
     * Gets query for [[CarinhoCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarinhoCompras()
    {
        return $this->hasOne(CarinhoCompras::class, ['id' => 'carinho_compras_id']);
    }
}

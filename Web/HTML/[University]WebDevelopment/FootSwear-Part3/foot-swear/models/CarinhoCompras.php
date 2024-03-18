<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carinho_compras".
 *
 * @property int $id
 * @property string|null $user_id
 * @property int $utilizador_id
 * @property int $utilizador_utilizador_metodo_pagamento_id
 * @property int $utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1
 * @property int $utilizador_utilizador_metodo_pagamento_id1
 * @property int $utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11
 *
 * @property ItemCarinhoCompras[] $itemCarinhoCompras
 * @property Utilizador $utilizador
 */
class CarinhoCompras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carinho_compras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11'], 'required'],
            [['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11'], 'integer'],
            [['user_id'], 'string', 'max' => 45],
            [['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11'], 'unique', 'targetAttribute' => ['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11']],
            [['utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::class, 'targetAttribute' => ['utilizador_id' => 'id', 'utilizador_utilizador_metodo_pagamento_id' => 'utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1' => 'utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1' => 'utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11' => 'utilizador_metodo_pagamento_tipo_pagamento_id11']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'utilizador_id' => 'Utilizador ID',
            'utilizador_utilizador_metodo_pagamento_id' => 'Utilizador Utilizador Metodo Pagamento ID',
            'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1' => 'Utilizador Utilizador Metodo Pagamento Tipo Pagamento Id1',
            'utilizador_utilizador_metodo_pagamento_id1' => 'Utilizador Utilizador Metodo Pagamento Id1',
            'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11' => 'Utilizador Utilizador Metodo Pagamento Tipo Pagamento Id11',
        ];
    }

    /**
     * Gets query for [[ItemCarinhoCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemCarinhoCompras()
    {
        return $this->hasMany(ItemCarinhoCompras::class, ['carinho_compras_id' => 'id']);
    }

    /**
     * Gets query for [[Utilizador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizador::class, ['id' => 'utilizador_id', 'utilizador_metodo_pagamento_id' => 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_metodo_pagamento_tipo_pagamento_id1' => 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_metodo_pagamento_id1' => 'utilizador_utilizador_metodo_pagamento_id1', 'utilizador_metodo_pagamento_tipo_pagamento_id11' => 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11']);
    }
}

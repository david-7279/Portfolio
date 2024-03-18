<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encomenda".
 *
 * @property int $id
 * @property string|null $user_id
 * @property string|null $data_encomenda
 * @property string|null $metodo_pagamento_id
 * @property float|null $total_encomenda
 * @property int $utilizador_id
 * @property int $utilizador_utilizador_metodo_pagamento_id
 * @property int $utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1
 *
 * @property LinhaEncomenda[] $linhaEncomendas
 * @property Utilizador $utilizador
 */
class Encomenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'encomenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1'], 'required'],
            [['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1'], 'integer'],
            [['data_encomenda'], 'safe'],
            [['total_encomenda'], 'number'],
            [['user_id', 'metodo_pagamento_id'], 'string', 'max' => 45],
            [['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1'], 'unique', 'targetAttribute' => ['id', 'utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1']],
            [['utilizador_id', 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::class, 'targetAttribute' => ['utilizador_id' => 'id', 'utilizador_utilizador_metodo_pagamento_id' => 'utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1' => 'utilizador_metodo_pagamento_tipo_pagamento_id1']],
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
            'data_encomenda' => 'Data Encomenda',
            'metodo_pagamento_id' => 'Metodo Pagamento ID',
            'total_encomenda' => 'Total Encomenda',
            'utilizador_id' => 'Utilizador ID',
            'utilizador_utilizador_metodo_pagamento_id' => 'Utilizador Utilizador Metodo Pagamento ID',
            'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1' => 'Utilizador Utilizador Metodo Pagamento Tipo Pagamento Id1',
        ];
    }

    /**
     * Gets query for [[LinhaEncomendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLinhaEncomendas()
    {
        return $this->hasMany(LinhaEncomenda::class, ['encomenda_id1' => 'id']);
    }

    /**
     * Gets query for [[Utilizador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizador::class, ['id' => 'utilizador_id', 'utilizador_metodo_pagamento_id' => 'utilizador_utilizador_metodo_pagamento_id', 'utilizador_metodo_pagamento_tipo_pagamento_id1' => 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1']);
    }
}

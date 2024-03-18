<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utilizador".
 *
 * @property int $id
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $utilizador_metodo_pagamento_id
 * @property int $utilizador_metodo_pagamento_tipo_pagamento_id1
 * @property int $utilizador_metodo_pagamento_id1
 * @property int $utilizador_metodo_pagamento_tipo_pagamento_id11
 *
 * @property CarinhoCompras[] $carinhoCompras
 * @property Encomenda[] $encomendas
 * @property UtilizadorMetodoPagamento $utilizadorMetodoPagamentoId1
 */
class Utilizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utilizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'login', 'email', 'password', 'utilizador_metodo_pagamento_id', 'utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_metodo_pagamento_id1', 'utilizador_metodo_pagamento_tipo_pagamento_id11'], 'required'],
            [['id', 'utilizador_metodo_pagamento_id', 'utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_metodo_pagamento_id1', 'utilizador_metodo_pagamento_tipo_pagamento_id11'], 'integer'],
            [['login', 'email'], 'string', 'max' => 90],
            [['password'], 'string', 'max' => 45],
            [['id', 'utilizador_metodo_pagamento_id', 'utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_metodo_pagamento_id1', 'utilizador_metodo_pagamento_tipo_pagamento_id11'], 'unique', 'targetAttribute' => ['id', 'utilizador_metodo_pagamento_id', 'utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_metodo_pagamento_id1', 'utilizador_metodo_pagamento_tipo_pagamento_id11']],
            [['utilizador_metodo_pagamento_id1', 'utilizador_metodo_pagamento_tipo_pagamento_id11'], 'exist', 'skipOnError' => true, 'targetClass' => UtilizadorMetodoPagamento::class, 'targetAttribute' => ['utilizador_metodo_pagamento_id1' => 'id', 'utilizador_metodo_pagamento_tipo_pagamento_id11' => 'tipo_pagamento_id1']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'email' => 'Email',
            'password' => 'Password',
            'utilizador_metodo_pagamento_id' => 'Utilizador Metodo Pagamento ID',
            'utilizador_metodo_pagamento_tipo_pagamento_id1' => 'Utilizador Metodo Pagamento Tipo Pagamento Id1',
            'utilizador_metodo_pagamento_id1' => 'Utilizador Metodo Pagamento Id1',
            'utilizador_metodo_pagamento_tipo_pagamento_id11' => 'Utilizador Metodo Pagamento Tipo Pagamento Id11',
        ];
    }

    /**
     * Gets query for [[CarinhoCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarinhoCompras()
    {
        return $this->hasMany(CarinhoCompras::class, ['utilizador_id' => 'id', 'utilizador_utilizador_metodo_pagamento_id' => 'utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1' => 'utilizador_metodo_pagamento_tipo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_id1' => 'utilizador_metodo_pagamento_id1', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id11' => 'utilizador_metodo_pagamento_tipo_pagamento_id11']);
    }

    /**
     * Gets query for [[Encomendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendas()
    {
        return $this->hasMany(Encomenda::class, ['utilizador_id' => 'id', 'utilizador_utilizador_metodo_pagamento_id' => 'utilizador_metodo_pagamento_id', 'utilizador_utilizador_metodo_pagamento_tipo_pagamento_id1' => 'utilizador_metodo_pagamento_tipo_pagamento_id1']);
    }

    /**
     * Gets query for [[UtilizadorMetodoPagamentoId1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizadorMetodoPagamentoId1()
    {
        return $this->hasOne(UtilizadorMetodoPagamento::class, ['id' => 'utilizador_metodo_pagamento_id1', 'tipo_pagamento_id1' => 'utilizador_metodo_pagamento_tipo_pagamento_id11']);
    }
}

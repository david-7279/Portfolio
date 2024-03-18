<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property string|null $categoria
 * @property string|null $nome
 * @property string|null $descricao
 * @property string|null $imagem
 * @property string|null $produtoscol
 * @property int $produtos_categoria_id
 *
 * @property ItemProduto[] $itemProdutos
 * @property LinhaEncomenda[] $linhaEncomendas
 * @property ProdutosCategoria $produtosCategoria
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produtos_categoria_id'], 'required'],
            [['id', 'produtos_categoria_id'], 'integer'],
            [['imagem'], 'string'],
            [['categoria', 'nome', 'descricao', 'produtoscol'], 'string', 'max' => 45],
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
            'categoria' => 'Categoria',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'imagem' => 'Imagem',
            'produtoscol' => 'Produtoscol',
            'produtos_categoria_id' => 'Produtos Categoria ID',
        ];
    }

    /**
     * Gets query for [[ItemProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemProdutos()
    {
        return $this->hasMany(ItemProduto::class, ['produtos_id' => 'id']);
    }

    /**
     * Gets query for [[LinhaEncomendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLinhaEncomendas()
    {
        return $this->hasMany(LinhaEncomenda::class, ['produtos_id' => 'id', 'produtos_produtos_categoria_id' => 'produtos_categoria_id']);
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
}

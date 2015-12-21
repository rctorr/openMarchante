<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property double $precio
 * @property string $imagen
 * @property string $codigo
 * @property integer $idcategoria
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'precio'], 'required'],
            [['descripcion'], 'string'],
            [['precio'], 'number'],
            [['idcategoria'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['imagen'], 'string', 'max' => 30],
            [['codigo'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
            'imagen' => 'Imagen',
            'codigo' => 'Codigo',
            'idcategoria' => 'Idcategoria',
        ];
    }
}

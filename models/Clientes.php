<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $idCliente
 * @property string|null $Nombre
 * @property string|null $Apellido
 * @property string|null $Correo
 * @property string|null $Contrasena
 * @property string|null $Telefono
 * @property string|null $Direccion
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Apellido', 'Correo', 'Contrasena', 'Telefono', 'Direccion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCliente' => 'Id Cliente',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Correo' => 'Correo',
            'Contrasena' => 'Contrasena',
            'Telefono' => 'Telefono',
            'Direccion' => 'Direccion',
        ];
    }
}

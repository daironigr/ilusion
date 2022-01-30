<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property float|null $precio
 * @property string|null $tiempo_promedio
 * @property int|null $id_tipo_servicio
 *
 * @property TipoServicio $tipoServicio
 * @property Reserva[] $reservas
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['precio'], 'number'],
            [['id_tipo_servicio'], 'default', 'value' => null],
            [['id_tipo_servicio'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
            [['tiempo_promedio'], 'string', 'max' => 12],
            [['id_tipo_servicio'], 'exist', 'skipOnError' => true, 'targetClass' => TipoServicio::className(), 'targetAttribute' => ['id_tipo_servicio' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'precio' => Yii::t('app', 'Precio'),
            'tiempo_promedio' => Yii::t('app', 'Tiempo Promedio'),
            'id_tipo_servicio' => Yii::t('app', 'Id Tipo Servicio'),
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['id' => 'id_reserva'])
            ->viaTable('servicio_reserva', ['id_servicio' => 'id']);
    }

    /**
     * Gets query for [[TipoServicio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipoServicio()
    {
        return $this->hasOne(TipoServicio::className(), ['id' => 'id_tipo_servicio']);
    }
}

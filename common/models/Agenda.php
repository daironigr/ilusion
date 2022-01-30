<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property int $id
 * @property int|null $dia_semana
 * @property string|null $hora
 * @property int|null $capacidad
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dia_semana', 'capacidad'], 'default', 'value' => null],
            [['dia_semana', 'capacidad'], 'integer'],
            [['hora'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'dia_semana' => Yii::t('app', 'Dia Semana'),
            'hora' => Yii::t('app', 'Hora'),
            'capacidad' => Yii::t('app', 'Capacidad'),
        ];
    }
}

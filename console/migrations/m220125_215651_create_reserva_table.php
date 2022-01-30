<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reserva}}`.
 */
class m220125_215651_create_reserva_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reserva}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'correo' => $this->string(),
            'telefono' => $this->string(),
            'fecha_hora' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reserva}}');
    }
}

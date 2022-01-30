<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%servicio_reserva}}`.
 */
class m220125_215656_create_servicio_reserva_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%servicio_reserva}}', [
            'id' => $this->primaryKey(),
            'id_servicio' => $this->integer(),
            'id_reserva' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-id_servicio-servicio_reserva',
            'servicio_reserva',
            'id_servicio',
            'servicio',
            'id'
        );

        $this->addForeignKey(
            'fk-id_reserva_servicio_reserva',
            'servicio_reserva',
            'id_reserva',
            'reserva',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-id_servicio-servicio_reserva','servicio_reserva');
        $this->dropForeignKey('fk-id_reserva_servicio_reserva','servicio_reserva');
        $this->dropTable('{{%servicio_reserva}}');
    }
}

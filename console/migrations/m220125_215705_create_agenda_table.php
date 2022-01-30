<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%agenda}}`.
 */
class m220125_215705_create_agenda_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%agenda}}', [
            'id' => $this->primaryKey(),
            'dia_semana' => $this->integer(),
            'hora' => $this->time(),
            'capacidad' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%agenda}}');
    }
}

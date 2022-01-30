<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tipo_servicio}}`.
 */
class m220125_215637_create_tipo_servicio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tipo_servicio}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tipo_servicio}}');
    }
}

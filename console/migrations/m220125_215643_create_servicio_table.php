<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%servicio}}`.
 */
class m220125_215643_create_servicio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%servicio}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'descripcion' => $this->string(),
            'precio' => $this->float(),
            'tiempo_promedio' => $this->string(12),
            'id_tipo_servicio' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk-id_tipo_servicio-servicio',
            'servicio',
            'id_tipo_servicio',
            'tipo_servicio',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tipo_servicio', 'fk-id_tipo_servicio-servicio');
        $this->dropTable('{{%servicio}}');
    }
}

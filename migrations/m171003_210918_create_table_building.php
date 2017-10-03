<?php

use yii\db\Migration;

/**
 * Class m171003_210918_create_table_building
 */
class m171003_210918_create_table_building extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%building}}', [
            'id' => $this->primaryKey(),
            'address' => $this->string()->notNull(),
            'geo_lat' => $this->decimal(9,6),
            'geo_lon' => $this->decimal(9,6),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%building}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Class m171003_210922_create_table_firm
 */
class m171003_210922_create_table_firm extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%firm}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'building_id' => $this->integer()->notNull(),
            'phones' => $this->string(),
            'created_at' => $this->integer()->notNull(),
        ]);

        $this->createIndex('idx-firm-building_id', '{{%firm}}', 'building_id');

        $this->addForeignKey('fk-firm-building', '{{%firm}}', 'building_id', '{{%building}}', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%firm}}');
    }
}

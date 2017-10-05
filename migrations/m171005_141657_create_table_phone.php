<?php

use yii\db\Migration;

/**
 * Class m171005_141657_create_table_phone
 */
class m171005_141657_create_table_phone extends Migration
{

    public function up()
    {
        // Таблица с телефонами
        $this->createTable('{{%phone}}', [
            'id' => $this->primaryKey(),
            'phone' => $this->string()->notNull(),
        ]);

        // Связь телефона и фирмы
        $this->createTable('{{%firm_phone}}', [
            'firm_id' => $this->integer()->notNull(),
            'phone_id' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-firm_phone', '{{%firm_phone}}', ['firm_id','phone_id']);

        $this->createIndex('idx-firm_phone-firm_id', '{{%firm_phone}}', 'firm_id');
        $this->createIndex('idx-firm_phone-phone_id', '{{%firm_phone}}', 'phone_id');

        $this->addForeignKey('fk-firm_phone-firm', '{{%firm_phone}}', 'firm_id', '{{%firm}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-firm_phone-phone', '{{%firm_phone}}', 'phone_id', '{{%phone}}', 'id', 'CASCADE', 'RESTRICT');

    }

    public function down()
    {
        $this->dropTable('{{%firm_phone}}');
        $this->dropTable('{{%phone}}');
    }
}

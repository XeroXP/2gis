<?php

use yii\db\Migration;

/**
 * Class m171003_211924_create_table_firm_category
 */
class m171003_211924_create_table_firm_category extends Migration
{

    // Связующая таблица -- несколько категорий у фирмы
    // Связь один ко многим
    public function up()
    {
        $this->createTable('{{%firm_category}}', [
            'firm_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-firm_category', '{{%firm_category}}', ['firm_id','category_id']);

        $this->createIndex('idx-firm_category-firm_id', '{{%firm_category}}', 'firm_id');
        $this->createIndex('idx-firm_category-category_id', '{{%firm_category}}', 'category_id');

        $this->addForeignKey('fk-firm_category-firm', '{{%firm_category}}', 'firm_id', '{{%firm}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-firm_category-category', '{{%firm_category}}', 'category_id', '{{%category}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%firm_category}}');
    }
}

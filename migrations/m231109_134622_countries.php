<?php

use yii\db\Migration;

/**
 * Class m231109_134622_countries
 */
class m231109_134622_countries extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey(),
            'uid' => $this->string()->unique(),
            'deleted' => $this->boolean()->defaultValue(false),
            'name_ru' => $this->string()->unique(),
            'name_en' => $this->string()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231109_134622_countries cannot be reverted.\n";

        return false;
    }
    */
}

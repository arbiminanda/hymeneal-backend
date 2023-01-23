<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%confirmation}}`.
 */
class m230123_123013_create_confirmation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%confirmation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'greetings' => $this->string()->notNull(),
            'presences' => $this->string()->notNull(),
            'amount' => $this->string()->notNull(),
            'timestamp' => $this->dateTime()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%confirmation}}');
    }
}

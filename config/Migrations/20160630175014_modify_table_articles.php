<?php

use Phinx\Migration\AbstractMigration;

class ModifyTableArticles extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('articles');
        $table
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('body', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false
            ])
            ->addColumn('img', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->create();
    }
    
    public function down()
    {
        $this->dropTable('articles');
    }
}

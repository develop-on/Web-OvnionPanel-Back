<?php

use Phinx\Migration\AbstractMigration;

class CreateTableNavigations extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('navigations');
        $table
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
				'null' => false
            ])
			->addColumn('title', 'string', [
                'default' => null,
                'limit' => 50,
				'null' => false
            ])
            ->addColumn('url', 'string', [
                'default' => null,
				'limit' => 50,
                'null' => false
            ])
            ->addColumn('target', 'string', [
                'default' => null,
                'limit' => 255,
				'null' => false
            ])
            ->addColumn('position', 'integer', [
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
        $this->dropTable('navigations');
    }
}

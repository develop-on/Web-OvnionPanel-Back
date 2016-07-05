<?php

use Phinx\Migration\AbstractMigration;

class CreateTableEvents extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('events');
        $table
            ->addColumn('event_type_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('details', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false
            ])
            ->addColumn('start', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false
            ])
            ->addColumn('end', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false
            ])
            ->addColumn('status', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
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
        $this->dropTable('events');
    }
}

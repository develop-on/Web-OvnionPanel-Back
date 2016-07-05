<?php

use Phinx\Migration\AbstractMigration;

class CreateTableEventTypes extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('event_types');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false
            ])
            ->addColumn('color', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->create();
    }
    
    public function down()
    {
        $this->dropTable('event_types');
    }
}

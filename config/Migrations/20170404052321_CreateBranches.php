<?php
use Migrations\AbstractMigration;

class CreateBranches extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('branches', ['id' => false, 'primary_key' => ['branch_id']]);
        $table->addColumn('branch_id', 'integer',[
            'autoIncrement' => true,
            'default' => null,
            'limit' => 11,
            'null' => false
            ])
            ->addColumn('branch_name', 'string',[
            'default' => null,
            'limit' => 255,
            'null' => false
            ])
            ->addColumn('branch_created', 'datetime',[
            'default' => 'CURRENT_TIMESTAMP',
            'limit' => 100,
            'null' => false
            ])
            ->addColumn('branch_status', 'text',[
            'default' => null,
            'limit' => null,
            'null' => false
            ])
            ->addColumn('company_id', 'integer',[
            'default' => null,
            'limit' => 11,
            'null' => false
            ])
            ->addIndex(['company_id']);
        $table->create();
    }
}

<?php
use Migrations\AbstractSeed;

/**
 * Companies seed.
 */
class CompaniesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'company_id' => '1',
                'company_name' => 'CG Technosoft',
                'company_email' => 'deepak.singhal@cgt.co.in',
                'company_address' => '5 Road Sardarpura Jodhpur',
                'company_profile' => 'Engineer',
                'company_created' => '2017-04-04 06:18:00',
                'company_status' => 'active',
            ],
            [
                'company_id' => '1',
                'company_name' => 'CG Technosoft',
                'company_email' => 'deepak.singhal@cgt.co.in',
                'company_address' => '5 Road Sardarpura Jodhpur',
                'company_profile' => 'Engineer',
                'company_created' => '2017-04-04 06:18:00',
                'company_status' => 'active',
            ],
        ];

        $table = $this->table('companies');
        $table->insert($data)->save();
    }
}

<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppCaseFixture
 */
class AppCaseFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'app_case';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'CASE_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Case ID', 'autoIncrement' => true, 'precision' => null],
        'FROM_HOUR' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'From hour', 'precision' => null, 'autoIncrement' => null],
        'TO_HOUR' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'To hour', 'precision' => null, 'autoIncrement' => null],
        'STATUS' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'Status', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['CASE_ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'CASE_ID' => 1,
                'FROM_HOUR' => 1,
                'TO_HOUR' => 1,
                'STATUS' => 1,
            ],
        ];
        parent::init();
    }
}

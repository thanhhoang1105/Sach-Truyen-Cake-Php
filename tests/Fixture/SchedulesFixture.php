<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchedulesFixture
 */
class SchedulesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'Schedule_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Customer_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Doctor_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ngayhenkham' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'giobatdau' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'gioketthuc' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_doctor_id' => ['type' => 'index', 'columns' => ['Doctor_id'], 'length' => []],
            'FK_customer_id' => ['type' => 'index', 'columns' => ['Customer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Schedule_id'], 'length' => []],
            'FK_doctor_id' => ['type' => 'foreign', 'columns' => ['Doctor_id'], 'references' => ['doctors', 'Doctor_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_customer_id' => ['type' => 'foreign', 'columns' => ['Customer_id'], 'references' => ['customers', 'Customer_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'Schedule_id' => 1,
                'Customer_id' => 1,
                'Doctor_id' => 1,
                'ngayhenkham' => '2021-05-13',
                'giobatdau' => '07:31:36',
                'gioketthuc' => '07:31:36',
            ],
        ];
        parent::init();
    }
}

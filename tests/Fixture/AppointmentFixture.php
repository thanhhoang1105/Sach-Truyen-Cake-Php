<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointmentFixture
 */
class AppointmentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'appointment';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'APP_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Appointment ID', 'autoIncrement' => true, 'precision' => null],
        'DOCTOR_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Doctor ID', 'precision' => null, 'autoIncrement' => null],
        'CUSTOMER_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Customer ID', 'precision' => null, 'autoIncrement' => null],
        'CASE_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Case ID', 'precision' => null, 'autoIncrement' => null],
        'APP_DATE' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Appointment Date', 'precision' => null],
        'NOTE' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Note', 'precision' => null],
        'APP_STATUS' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'Appointment Status', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['APP_ID'], 'length' => []],
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
                'APP_ID' => 1,
                'DOCTOR_ID' => 1,
                'CUSTOMER_ID' => 1,
                'CASE_ID' => 1,
                'APP_DATE' => '2021-06-06',
                'NOTE' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'APP_STATUS' => 1,
            ],
        ];
        parent::init();
    }
}

<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorFixture
 */
class DoctorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'doctor';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'DOCTOR_NO' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Doctor Identify', 'autoIncrement' => true, 'precision' => null],
        'CERTIFICATE_NUM' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Doctor ID', 'precision' => null],
        'DOCTOR_NAME' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Name', 'precision' => null],
        'BIRTH_DATE' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Date of birth', 'precision' => null],
        'POSITION' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Position', 'precision' => null],
        'DESCRIPTION' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Description', 'precision' => null],
        'STATUS' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => null, 'comment' => 'Work or Leave', 'precision' => null],
        'IMAGE' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Image Url', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['DOCTOR_NO'], 'length' => []],
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
                'DOCTOR_NO' => 1,
                'CERTIFICATE_NUM' => 'Lorem ipsu',
                'DOCTOR_NAME' => 'Lorem ipsum dolor sit amet',
                'BIRTH_DATE' => '2021-06-06',
                'POSITION' => 'Lorem ipsum dolor sit amet',
                'DESCRIPTION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'STATUS' => 'Lorem ipsum dolor sit amet',
                'IMAGE' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            ],
        ];
        parent::init();
    }
}

<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctorTable Test Case
 */
class DoctorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctorTable
     */
    protected $Doctor;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Doctor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Doctor') ? [] : ['className' => DoctorTable::class];
        $this->Doctor = $this->getTableLocator()->get('Doctor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Doctor);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

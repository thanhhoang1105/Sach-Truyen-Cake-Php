<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalendarsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalendarsTable Test Case
 */
class CalendarsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalendarsTable
     */
    protected $Calendars;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Calendars',
        'app.EventTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Calendars') ? [] : ['className' => CalendarsTable::class];
        $this->Calendars = $this->getTableLocator()->get('Calendars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Calendars);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

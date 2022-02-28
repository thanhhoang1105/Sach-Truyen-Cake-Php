<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventtypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventtypesTable Test Case
 */
class EventtypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventtypesTable
     */
    protected $Eventtypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Eventtypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Eventtypes') ? [] : ['className' => EventtypesTable::class];
        $this->Eventtypes = $this->getTableLocator()->get('Eventtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Eventtypes);

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

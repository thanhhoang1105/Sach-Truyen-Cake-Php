<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThoikhoabieusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThoikhoabieusTable Test Case
 */
class ThoikhoabieusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ThoikhoabieusTable
     */
    protected $Thoikhoabieus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Thoikhoabieus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Thoikhoabieus') ? [] : ['className' => ThoikhoabieusTable::class];
        $this->Thoikhoabieus = $this->getTableLocator()->get('Thoikhoabieus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Thoikhoabieus);

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

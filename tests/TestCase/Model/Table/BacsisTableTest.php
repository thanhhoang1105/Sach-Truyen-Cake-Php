<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BacsisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BacsisTable Test Case
 */
class BacsisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BacsisTable
     */
    protected $Bacsis;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bacsis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bacsis') ? [] : ['className' => BacsisTable::class];
        $this->Bacsis = $this->getTableLocator()->get('Bacsis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bacsis);

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

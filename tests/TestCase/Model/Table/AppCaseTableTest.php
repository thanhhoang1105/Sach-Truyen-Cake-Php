<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppCaseTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppCaseTable Test Case
 */
class AppCaseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppCaseTable
     */
    protected $AppCase;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AppCase',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AppCase') ? [] : ['className' => AppCaseTable::class];
        $this->AppCase = $this->getTableLocator()->get('AppCase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AppCase);

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

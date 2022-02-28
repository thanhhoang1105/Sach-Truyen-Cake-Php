<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChaptersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChaptersTable Test Case
 */
class ChaptersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChaptersTable
     */
    protected $Chapters;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Chapters',
        'app.Stories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chapters') ? [] : ['className' => ChaptersTable::class];
        $this->Chapters = $this->getTableLocator()->get('Chapters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Chapters);

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

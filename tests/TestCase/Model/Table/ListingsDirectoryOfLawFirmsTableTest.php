<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListingsDirectoryOfLawFirmsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListingsDirectoryOfLawFirmsTable Test Case
 */
class ListingsDirectoryOfLawFirmsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListingsDirectoryOfLawFirmsTable
     */
    protected $ListingsDirectoryOfLawFirms;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ListingsDirectoryOfLawFirms',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ListingsDirectoryOfLawFirms') ? [] : ['className' => ListingsDirectoryOfLawFirmsTable::class];
        $this->ListingsDirectoryOfLawFirms = $this->getTableLocator()->get('ListingsDirectoryOfLawFirms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ListingsDirectoryOfLawFirms);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ListingsDirectoryOfLawFirmsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ListingsDirectoryOfLawFirmsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

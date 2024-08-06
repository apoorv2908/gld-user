<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListingsDataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListingsDataTable Test Case
 */
class ListingsDataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListingsDataTable
     */
    protected $ListingsData;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ListingsData',
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
        $config = $this->getTableLocator()->exists('ListingsData') ? [] : ['className' => ListingsDataTable::class];
        $this->ListingsData = $this->getTableLocator()->get('ListingsData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ListingsData);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ListingsDataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ListingsDataTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

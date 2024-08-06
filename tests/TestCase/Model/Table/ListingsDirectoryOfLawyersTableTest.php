<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListingsDirectoryOfLawyersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListingsDirectoryOfLawyersTable Test Case
 */
class ListingsDirectoryOfLawyersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListingsDirectoryOfLawyersTable
     */
    protected $ListingsDirectoryOfLawyers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ListingsDirectoryOfLawyers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ListingsDirectoryOfLawyers') ? [] : ['className' => ListingsDirectoryOfLawyersTable::class];
        $this->ListingsDirectoryOfLawyers = $this->getTableLocator()->get('ListingsDirectoryOfLawyers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ListingsDirectoryOfLawyers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ListingsDirectoryOfLawyersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

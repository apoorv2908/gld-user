<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubscriptionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubscriptionTable Test Case
 */
class SubscriptionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubscriptionTable
     */
    protected $Subscription;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Subscription',
        'app.Users',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Subscription') ? [] : ['className' => SubscriptionTable::class];
        $this->Subscription = $this->getTableLocator()->get('Subscription', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Subscription);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubscriptionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubscriptionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserSubscriptionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserSubscriptionTable Test Case
 */
class UserSubscriptionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserSubscriptionTable
     */
    protected $UserSubscription;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserSubscription',
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
        $config = $this->getTableLocator()->exists('UserSubscription') ? [] : ['className' => UserSubscriptionTable::class];
        $this->UserSubscription = $this->getTableLocator()->get('UserSubscription', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserSubscription);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserSubscriptionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UserSubscriptionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

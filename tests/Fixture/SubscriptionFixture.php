<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubscriptionFixture
 */
class SubscriptionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'subscription';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 'Lorem ipsum dolor sit amet',
                'firstname' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'contact' => 'Lorem ipsum dolor sit amet',
                'created_on' => '',
                'amt' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}

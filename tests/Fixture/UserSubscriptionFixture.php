<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserSubscriptionFixture
 */
class UserSubscriptionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_subscription';
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
                'payment_status' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

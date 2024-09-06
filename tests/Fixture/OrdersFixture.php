<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
{
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
                'user_id' => 1,
                'listing_id' => 'Lorem ipsum dolor sit amet',
                'amount' => 1.5,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-08-27 08:31:09',
                'modified' => '2024-08-27 08:31:09',
            ],
        ];
        parent::init();
    }
}

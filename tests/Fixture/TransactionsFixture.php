<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionsFixture
 */
class TransactionsFixture extends TestFixture
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
                'order_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'contact_number' => 'Lorem ipsum dolor ',
                'transaction_date' => '2024-09-10 05:17:03',
                'status' => 'Lorem ipsum dolor sit amet',
                'amount' => 1.5,
            ],
        ];
        parent::init();
    }
}

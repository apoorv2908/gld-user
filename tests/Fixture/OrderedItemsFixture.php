<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderedItemsFixture
 */
class OrderedItemsFixture extends TestFixture
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
                'order_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'price' => 1.5,
            ],
        ];
        parent::init();
    }
}

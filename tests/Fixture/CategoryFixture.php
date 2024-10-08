<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoryFixture
 */
class CategoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'category';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'sno' => 1,
                'category' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

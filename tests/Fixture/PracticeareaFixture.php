<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PracticeareaFixture
 */
class PracticeareaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'practicearea';
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
                'practice_area_title' => 'Lorem ipsum dolor sit amet',
                'practice_area_id' => 1,
                'date_added' => '2024-08-01',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}

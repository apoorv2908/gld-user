<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Practicearea Entity
 *
 * @property int $sno
 * @property string $practice_area_title
 * @property int $practice_area_id
 * @property \Cake\I18n\FrozenDate $date_added
 * @property int $status
 */
class Practicearea extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'practice_area_title' => true,
        'practice_area_id' => true,
        'date_added' => true,
        'status' => true,
    ];
}

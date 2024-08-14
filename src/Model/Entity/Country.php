<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity
 *
 * @property int $id
 * @property string $shortname
 * @property string $name
 * @property int $phonecode
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Subregion $subregion
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\State[] $states
 */
class Country extends Entity
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
        'shortname' => true,
        'name' => true,
        'phonecode' => true,
        'cities' => true,
        'states' => true,
    ];
}

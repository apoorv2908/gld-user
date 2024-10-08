<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListingsDirectoryOfLawFirm Entity
 *
 * @property int $id
 * @property string $law_firm_name
 * @property string $first_name
 * @property string $last_name
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $pin_code
 * @property string $street_address_line1
 * @property string|null $street_address_line2
 * @property string $email
 * @property string|null $website
 * @property string|null $phone
 * @property string $mobile
 * @property string $image_logo
 * @property string|null $year_of_establishment
 * @property string|null $courts_of_practice
 * @property string|null $practice_areas
 * @property string|null $brief_profile
 * @property string $free_initial_consultation
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class ListingsDirectoryOfLawFirm extends Entity
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
        'law_firm_name' => true,
        'first_name' => true,
        'last_name' => true,
        'country' => true,
        'state' => true,
        'city' => true,
        'pin_code' => true,
        'street_address_line1' => true,
        'street_address_line2' => true,
        'email' => true,
        'website' => true,
        'phone' => true,
        'mobile' => true,
        'image_logo' => true,
        'year_of_establishment' => true,
        'courts_of_practice' => true,
        'practice_areas' => true,
        'brief_profile' => true,
        'free_initial_consultation' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}

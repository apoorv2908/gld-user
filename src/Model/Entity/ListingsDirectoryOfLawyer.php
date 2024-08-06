<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListingsDirectoryOfLawyer Entity
 *
 * @property int $id
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
 * @property string|null $professional_qualifications
 * @property string|null $affiliating
 * @property string|null $registration_number
 * @property string|null $practicing_since
 * @property string|null $courts_of_practice
 * @property string|null $practice_areas
 * @property string $complete_detail
 * @property string $free_initial_consultation
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class ListingsDirectoryOfLawyer extends Entity
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
        'professional_qualifications' => true,
        'affiliating' => true,
        'registration_number' => true,
        'practicing_since' => true,
        'courts_of_practice' => true,
        'practice_areas' => true,
        'complete_detail' => true,
        'free_initial_consultation' => true,
        'created' => true,
        'modified' => true,
    ];
}

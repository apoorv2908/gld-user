<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registration Entity
 *
 * @property int $sno
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $contact
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $password
 * @property string $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Registration extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'contact' => true,
        'country' => true,
        'state' => true,
        'city' => true,
        'password' => true,
        'user_id' => true,
        'user' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}

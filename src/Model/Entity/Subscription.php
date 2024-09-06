<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subscription Entity
 *
 * @property int $id
 * @property string $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $contact
 * @property \Cake\I18n\FrozenTime|null $created_on
 * @property int|null $amt
 * @property string|null $description
 * @property int|null $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order $order
 */
class Subscription extends Entity
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
        'user_id' => true,
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'contact' => true,
        'created_on' => true,
        'amt' => true,
        'description' => true,
        'status' => true,
        'user' => true,
        'order' => true,
    ];
}

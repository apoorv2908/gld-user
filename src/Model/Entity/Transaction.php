<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $order_id
 * @property string $name
 * @property string $email
 * @property string|null $contact_number
 * @property \Cake\I18n\FrozenTime|null $transaction_date
 * @property string $status
 * @property string $amount
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order $order
 */
class Transaction extends Entity
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
        'order_id' => true,
        'name' => true,
        'email' => true,
        'contact_number' => true,
        'transaction_date' => true,
        'status' => true,
        'amount' => true,
        'user' => true,
        'order' => true,
    ];
}

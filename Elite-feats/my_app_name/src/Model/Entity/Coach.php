<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coach Entity
 *
 * @property int $coach_id
 * @property string $coach_firstname
 * @property string $coach_lastname
 * @property string $coach_email
 */
class Coach extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'coach_firstname' => true,
        'coach_lastname' => true,
        'coach_email' => true,
    ];
}

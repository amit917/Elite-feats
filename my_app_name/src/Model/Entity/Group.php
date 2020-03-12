<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Group Entity
 *
 * @property int $group_id
 * @property int $athlete_id
 * @property int $coach_id
 * @property string $description
 *
 * @property \App\Model\Entity\Athlete $athlete
 * @property \App\Model\Entity\Coach $coach
 */
class Group extends Entity
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
        'athlete_id' => true,
        'coach_id' => true,
        'description' => true,
        'athlete' => true,
        'coach' => true,
    ];
}

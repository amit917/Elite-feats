<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity
 *
 * @property int $reports_id
 * @property int $assessment_id
 * @property int $athletes_id
 * @property int $group_id
 *
 * @property \App\Model\Entity\Assessment $assessment
 * @property \App\Model\Entity\Athlete $athlete
 * @property \App\Model\Entity\Group $group
 */
class Report extends Entity
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
        'assessment_id' => true,
        'athletes_id' => true,
        'group_id' => true,
        'assessment' => true,
        'athlete' => true,
        'group' => true,
    ];
}

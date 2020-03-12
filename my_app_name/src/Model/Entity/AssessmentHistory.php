<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssessmentHistory Entity
 *
 * @property int $id
 * @property int $assessment_id
 * @property int $group_id
 * @property int $coach_id
 * @property int $athlete_id
 * @property \Cake\I18n\FrozenDate $date
 *
 * @property \App\Model\Entity\Assessment $assessment
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Coach $coach
 * @property \App\Model\Entity\Athlete $athlete
 */
class AssessmentHistory extends Entity
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
        'group_id' => true,
        'coach_id' => true,
        'athlete_id' => true,
        'date' => true,
        'assessment' => true,
        'group' => true,
        'coach' => true,
        'athlete' => true,
    ];
}

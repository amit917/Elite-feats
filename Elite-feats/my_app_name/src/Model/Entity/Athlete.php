<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Athlete Entity
 *
 * @property int $athletes_id
 * @property int|null $coach_id
 * @property string $user_firstname
 * @property string $user_lastname
 * @property string $user_email
 * @property int|null $assessment_id
 * @property int|null $reports_id
 * @property int|null $groups_id
 *
 * @property \App\Model\Entity\Coach $coach
 * @property \App\Model\Entity\Assessment $assessment
 * @property \App\Model\Entity\Report $report
 * @property \App\Model\Entity\Group[] $groups
 * @property \App\Model\Entity\AssessmentHistory[] $assessment_history
 */
class Athlete extends Entity
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
        'coach_id' => true,
        'user_firstname' => true,
        'user_lastname' => true,
        'user_email' => true,
        'assessment_id' => true,
        'reports_id' => true,
        'groups_id' => true,
        'coach' => true,
        'assessment' => true,
        'report' => true,
        'groups' => true,
        'assessment_history' => true,
    ];
}

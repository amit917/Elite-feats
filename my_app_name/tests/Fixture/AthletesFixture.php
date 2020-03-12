<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AthletesFixture
 */
class AthletesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'athletes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'coach_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_firstname' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_lastname' => ['type' => 'string', 'length' => 75, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'assessment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reports_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'groups_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'athletes_coaches__fk' => ['type' => 'index', 'columns' => ['coach_id'], 'length' => []],
            'athletes_assessment__fk' => ['type' => 'index', 'columns' => ['assessment_id'], 'length' => []],
            'athletes_reports__fk' => ['type' => 'index', 'columns' => ['reports_id'], 'length' => []],
            'athletes_groups__fk' => ['type' => 'index', 'columns' => ['groups_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['athletes_id'], 'length' => []],
            'athletes_assessment__fk' => ['type' => 'foreign', 'columns' => ['assessment_id'], 'references' => ['assessment', 'assessment_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'athletes_coaches__fk' => ['type' => 'foreign', 'columns' => ['coach_id'], 'references' => ['coaches', 'coach_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'athletes_groups__fk' => ['type' => 'foreign', 'columns' => ['groups_id'], 'references' => ['groups', 'group_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'athletes_reports__fk' => ['type' => 'foreign', 'columns' => ['reports_id'], 'references' => ['reports', 'reports_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'athletes_id' => 1,
                'coach_id' => 1,
                'user_firstname' => 'Lorem ipsum dolor sit amet',
                'user_lastname' => 'Lorem ipsum dolor sit amet',
                'user_email' => 'Lorem ipsum dolor sit amet',
                'assessment_id' => 1,
                'reports_id' => 1,
                'groups_id' => 1,
            ],
        ];
        parent::init();
    }
}

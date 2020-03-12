<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReportsFixture
 */
class ReportsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'reports_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'assessment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'athletes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'group_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'reports_assessment__fk' => ['type' => 'index', 'columns' => ['assessment_id'], 'length' => []],
            'reports_groups__fk' => ['type' => 'index', 'columns' => ['group_id'], 'length' => []],
            'reports_athletes__fk' => ['type' => 'index', 'columns' => ['athletes_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['reports_id'], 'length' => []],
            'reports_assessment__fk' => ['type' => 'foreign', 'columns' => ['assessment_id'], 'references' => ['assessment', 'assessment_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'reports_athletes__fk' => ['type' => 'foreign', 'columns' => ['athletes_id'], 'references' => ['athletes', 'athletes_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'reports_groups__fk' => ['type' => 'foreign', 'columns' => ['group_id'], 'references' => ['groups', 'group_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'reports_id' => 1,
                'assessment_id' => 1,
                'athletes_id' => 1,
                'group_id' => 1,
            ],
        ];
        parent::init();
    }
}

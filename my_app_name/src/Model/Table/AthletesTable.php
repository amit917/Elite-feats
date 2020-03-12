<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Athletes Model
 *
 * @property \App\Model\Table\CoachesTable&\Cake\ORM\Association\BelongsTo $Coaches
 * @property \App\Model\Table\AssessmentTable&\Cake\ORM\Association\BelongsTo $Assessment
 * @property \App\Model\Table\ReportsTable&\Cake\ORM\Association\BelongsTo $Reports
 * @property \App\Model\Table\GroupsTable&\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\AssessmentHistoryTable&\Cake\ORM\Association\HasMany $AssessmentHistory
 * @property \App\Model\Table\GroupsTable&\Cake\ORM\Association\HasMany $Groups
 *
 * @method \App\Model\Entity\Athlete get($primaryKey, $options = [])
 * @method \App\Model\Entity\Athlete newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Athlete[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Athlete|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Athlete saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Athlete patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Athlete[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Athlete findOrCreate($search, callable $callback = null, $options = [])
 */
class AthletesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('athletes');
        $this->setDisplayField('athletes_id');
        $this->setPrimaryKey('athletes_id');

        $this->belongsTo('Coaches', [
            'foreignKey' => 'coach_id',
        ]);
        $this->belongsTo('Assessment', [
            'foreignKey' => 'assessment_id',
        ]);
        $this->belongsTo('Reports', [
            'foreignKey' => 'reports_id',
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'groups_id',
        ]);
        $this->hasMany('AssessmentHistory', [
            'foreignKey' => 'athlete_id',
        ]);
        $this->hasMany('Groups', [
            'foreignKey' => 'athlete_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('athletes_id')
            ->allowEmptyString('athletes_id', null, 'create');

        $validator
            ->scalar('user_firstname')
            ->maxLength('user_firstname', 50)
            ->requirePresence('user_firstname', 'create')
            ->notEmptyString('user_firstname');

        $validator
            ->scalar('user_lastname')
            ->maxLength('user_lastname', 75)
            ->requirePresence('user_lastname', 'create')
            ->notEmptyString('user_lastname');

        $validator
            ->scalar('user_email')
            ->maxLength('user_email', 255)
            ->requirePresence('user_email', 'create')
            ->notEmptyString('user_email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['coach_id'], 'Coaches'));
        $rules->add($rules->existsIn(['assessment_id'], 'Assessment'));
        $rules->add($rules->existsIn(['reports_id'], 'Reports'));
        $rules->add($rules->existsIn(['groups_id'], 'Groups'));

        return $rules;
    }
}

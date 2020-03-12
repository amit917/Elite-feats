<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coaches Model
 *
 * @method \App\Model\Entity\Coach get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coach newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coach[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coach|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coach saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coach[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coach findOrCreate($search, callable $callback = null, $options = [])
 */
class CoachesTable extends Table
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

        $this->setTable('coaches');
        $this->setDisplayField('coach_id');
        $this->setPrimaryKey('coach_id');
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
            ->integer('coach_id')
            ->allowEmptyString('coach_id', null, 'create');

        $validator
            ->scalar('coach_firstname')
            ->maxLength('coach_firstname', 50)
            ->requirePresence('coach_firstname', 'create')
            ->notEmptyString('coach_firstname');

        $validator
            ->scalar('coach_lastname')
            ->maxLength('coach_lastname', 70)
            ->requirePresence('coach_lastname', 'create')
            ->notEmptyString('coach_lastname');

        $validator
            ->scalar('coach_email')
            ->maxLength('coach_email', 255)
            ->requirePresence('coach_email', 'create')
            ->notEmptyString('coach_email');

        return $validator;
    }
}

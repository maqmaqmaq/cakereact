<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Licenses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Computers
 *
 * @method \App\Model\Entity\License get($primaryKey, $options = [])
 * @method \App\Model\Entity\License newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\License[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\License|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\License patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\License[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\License findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LicensesTable extends Table
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

        $this->table('licenses');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Computers', [
            'foreignKey' => 'computer_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('registration_key');

        $validator
            ->allowEmpty('system_key');

        $validator
            ->allowEmpty('activation_key');

        $validator
            ->allowEmpty('id_code');

        $validator
            ->allowEmpty('program_code');

        $validator
            ->allowEmpty('version_code');

        $validator
            ->allowEmpty('version_code2');

        $validator
            ->allowEmpty('type_code');

        $validator
            ->allowEmpty('license_date');

        $validator
            ->allowEmpty('expired_date');

        $validator
            ->allowEmpty('module');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('generator_version');

        $validator
            ->boolean('active')
            ->allowEmpty('active');

        $validator
            ->boolean('deleted')
            ->allowEmpty('deleted');

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
        $rules->add($rules->existsIn(['computer_id'], 'Computers'));

        return $rules;
    }
}

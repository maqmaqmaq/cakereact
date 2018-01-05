<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Distribiutors
 * @property \Cake\ORM\Association\HasMany $Stores
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountsTable extends Table
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

        $this->table('accounts');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Distribiutors', [
            'foreignKey' => 'distribiutor_id'
        ]);
        $this->hasMany('Stores', [
            'foreignKey' => 'account_id'
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
            ->allowEmpty('description');

        $validator
            ->allowEmpty('url');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('postalcode');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('id_code');

        $validator
            ->boolean('done')
            ->allowEmpty('done');

        $validator
            ->boolean('fv')
            ->allowEmpty('fv');

        $validator
            ->boolean('nolimit')
            ->allowEmpty('nolimit');

        $validator
            ->boolean('termin')
            ->allowEmpty('termin');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['distribiutor_id'], 'Distribiutors'));

        return $rules;
    }
}

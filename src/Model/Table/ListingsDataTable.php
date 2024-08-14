<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListingsData Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ListingsData newEmptyEntity()
 * @method \App\Model\Entity\ListingsData newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ListingsData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ListingsData get($primaryKey, $options = [])
 * @method \App\Model\Entity\ListingsData findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ListingsData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ListingsData[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ListingsData|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListingsData saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListingsData[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListingsData[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListingsData[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListingsData[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListingsDataTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('listings_data');
        $this->setDisplayField('law_firm_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('law_firm_name')
            ->maxLength('law_firm_name', 255)
            ->allowEmptyString('law_firm_name');

         $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->integer('country')
            ->requirePresence('country', 'create')
            ->notEmptyString('country');

        $validator
            ->integer('state')
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->integer('city')
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('pin_code')
            ->maxLength('pin_code', 20)
            ->requirePresence('pin_code', 'create')
            ->notEmptyString('pin_code');

        $validator
            ->scalar('street_address_line1')
            ->maxLength('street_address_line1', 255)
            ->requirePresence('street_address_line1', 'create')
            ->notEmptyString('street_address_line1');

        $validator
            ->scalar('street_address_line2')
            ->maxLength('street_address_line2', 255)
            ->allowEmptyString('street_address_line2');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 255)
            ->allowEmptyString('designation');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->allowEmptyString('website');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmptyString('phone');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        $validator
            ->scalar('image_logo')
            ->maxLength('image_logo', 255)
            ->requirePresence('image_logo', 'create')
            ->notEmptyFile('image_logo');

        $validator
            ->scalar('professional_qualifications')
            ->allowEmptyString('professional_qualifications');

        $validator
            ->scalar('affiliating')
            ->maxLength('affiliating', 255)
            ->allowEmptyString('affiliating');

        $validator
            ->scalar('registration_number')
            ->maxLength('registration_number', 255)
            ->allowEmptyString('registration_number');

        $validator
            ->scalar('year_of_establishment')
            ->allowEmptyString('year_of_establishment');

        $validator
            ->integer('practicing_since')
            ->allowEmptyString('practicing_since');

        $validator
            ->scalar('courts_of_practice')
            ->requirePresence('courts_of_practice', 'create')
            ->notEmptyString('courts_of_practice');

        $validator
            ->scalar('practice_areas')
            ->requirePresence('practice_areas', 'create')
            ->notEmptyString('practice_areas');

        $validator
            ->scalar('complete_detail')
            ->requirePresence('complete_detail', 'create')
            ->notEmptyString('complete_detail');

        $validator
            ->scalar('free_initial_consultation')
            ->requirePresence('free_initial_consultation', 'create')
            ->notEmptyString('free_initial_consultation');



        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}

<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListingsDirectoryOfLawyers Model
 *
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer newEmptyEntity()
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer get($primaryKey, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListingsDirectoryOfLawyersTable extends Table
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

        $this->setTable('listings_directory_of_lawyers');
        $this->setDisplayField('first_name');
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
            ->scalar('country')
            ->maxLength('country', 255)
            ->requirePresence('country', 'create')
            ->notEmptyString('country');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
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
            ->scalar('practicing_since')
            ->allowEmptyString('practicing_since');

        $validator
            ->scalar('courts_of_practice')
            ->allowEmptyString('courts_of_practice');

        $validator
            ->scalar('practice_areas')
            ->allowEmptyString('practice_areas');

        $validator
            ->scalar('complete_detail')
            ->maxLength('complete_detail', 255)
            ->requirePresence('complete_detail', 'create')
            ->notEmptyString('complete_detail');

        $validator
            ->scalar('free_initial_consultation')
            ->requirePresence('free_initial_consultation', 'create')
            ->notEmptyString('free_initial_consultation');

        $validator
            ->scalar('listing_id')
            ->maxLength('listing_id', 255)
            ->requirePresence('listing_id', 'create')
            ->notEmptyString('listing_id');

        $validator
            ->scalar('user_id')
            ->requirePresence('user_id', 'create')
            ->notEmptyString('user_id');

        return $validator;
    }
}

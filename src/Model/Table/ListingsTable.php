<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listings Model
 *
 * @property \App\Model\Table\ListingsDataTable&\Cake\ORM\Association\HasMany $ListingsData
 *
 * @method \App\Model\Entity\Listing newEmptyEntity()
 * @method \App\Model\Entity\Listing newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Listing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Listing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Listing findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Listing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Listing[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Listing|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Listing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Listing[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Listing[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Listing[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Listing[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ListingsTable extends Table
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

        $this->setTable('listings');
        $this->setDisplayField('firstname');
        $this->setPrimaryKey('id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'id',
            'joinType' => 'INNER', // Use INNER if you always want to join with existing countries
            'propertyName' => 'countryInfo' // Unique property name

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
            ->scalar('firstname')
            ->maxLength('firstname', 255)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 255)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname');

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
            ->scalar('pincode')
            ->maxLength('pincode', 15)
            ->requirePresence('pincode', 'create')
            ->notEmptyString('pincode');

        $validator
            ->scalar('street_address')
            ->maxLength('street_address', 255)
            ->requirePresence('street_address', 'create')
            ->notEmptyString('street_address');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('website')
            ->maxLength('website', 150)
            ->requirePresence('website', 'create')
            ->notEmptyString('website');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 100)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('qualification')
            ->maxLength('qualification', 255)
            ->allowEmptyString('qualification');

        $validator
            ->scalar('affiliating_bar_council_assoc')
            ->maxLength('affiliating_bar_council_assoc', 255)
            ->allowEmptyString('affiliating_bar_council_assoc');

        $validator
            ->scalar('reg_no')
            ->maxLength('reg_no', 255)
            ->allowEmptyString('reg_no');

        $validator
            ->scalar('practicing_since')
            ->maxLength('practicing_since', 10)
            ->allowEmptyString('practicing_since');

        $validator
            ->scalar('court_of_practice')
            ->allowEmptyString('court_of_practice');
        
        $validator
            ->scalar('practice_area')
            ->allowEmptyString('practice_area');

        $validator
            ->scalar('brief_detail')
            ->maxLength('brief_detail', 255)
            ->requirePresence('brief_detail', 'create')
            ->notEmptyString('brief_detail');

        $validator
            ->scalar('free_consultation')
            ->maxLength('free_consultation', 255)
            ->requirePresence('free_consultation', 'create')
            ->notEmptyString('free_consultation');

        $validator
            ->scalar('law_firm')
            ->maxLength('law_firm', 255)
            ->allowEmptyString('law_firm');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 255)
            ->allowEmptyString('designation');

        $validator
            ->scalar('estd_year')
            ->maxLength('estd_year', 255)
            ->allowEmptyString('estd_year');

        return $validator;
    }
}

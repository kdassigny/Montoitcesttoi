<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HostFamilies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\HostFamily get($primaryKey, $options = [])
 * @method \App\Model\Entity\HostFamily newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HostFamily[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HostFamily|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HostFamily patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HostFamily[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HostFamily findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HostFamiliesTable extends Table
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

        $this->table('host_families');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->requirePresence('animal_list', 'create')
            ->notEmpty('animal_list');

        $validator
            ->boolean('dog_male')
            ->requirePresence('dog_male', 'create')
            ->notEmpty('dog_male');

        $validator
            ->boolean('dog_female')
            ->requirePresence('dog_female', 'create')
            ->notEmpty('dog_female');

        $validator
            ->boolean('puppy')
            ->requirePresence('puppy', 'create')
            ->notEmpty('puppy');

        $validator
            ->boolean('cat_male')
            ->requirePresence('cat_male', 'create')
            ->notEmpty('cat_male');

        $validator
            ->boolean('cat_female')
            ->requirePresence('cat_female', 'create')
            ->notEmpty('cat_female');

        $validator
            ->boolean('kitten')
            ->requirePresence('kitten', 'create')
            ->notEmpty('kitten');

        $validator
            ->boolean('rodent')
            ->requirePresence('rodent', 'create')
            ->notEmpty('rodent');

        $validator
            ->boolean('nac')
            ->requirePresence('nac', 'create')
            ->notEmpty('nac');

        $validator
            ->boolean('bird')
            ->requirePresence('bird', 'create')
            ->notEmpty('bird');

        $validator
            ->integer('animal_numbre')
            ->requirePresence('animal_numbre', 'create')
            ->notEmpty('animal_numbre');

        $validator
            ->requirePresence('habitation', 'create')
            ->notEmpty('habitation');

        $validator
            ->requirePresence('garden', 'create')
            ->notEmpty('garden');

        $validator
            ->boolean('cloture')
            ->requirePresence('cloture', 'create')
            ->notEmpty('cloture');

        $validator
            ->boolean('securised')
            ->requirePresence('securised', 'create')
            ->notEmpty('securised');

        $validator
            ->boolean('premis')
            ->requirePresence('premis', 'create')
            ->notEmpty('premis');

        $validator
            ->integer('familly_membre')
            ->requirePresence('familly_membre', 'create')
            ->notEmpty('familly_membre');

        $validator
            ->integer('children')
            ->requirePresence('children', 'create')
            ->notEmpty('children');

        $validator
            ->boolean('experience')
            ->requirePresence('experience', 'create')
            ->notEmpty('experience');

        $validator
            ->requirePresence('place_animal', 'create')
            ->notEmpty('place_animal');

        $validator
            ->requirePresence('activity', 'create')
            ->notEmpty('activity');

        $validator
            ->requirePresence('disponibility', 'create')
            ->notEmpty('disponibility');

        $validator
            ->boolean('veterinary')
            ->requirePresence('veterinary', 'create')
            ->notEmpty('veterinary');

        $validator
            ->boolean('quarantine')
            ->requirePresence('quarantine', 'create')
            ->notEmpty('quarantine');

        $validator
            ->allowEmpty('note');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

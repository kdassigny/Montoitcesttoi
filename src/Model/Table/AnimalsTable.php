<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Animals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Especes
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Addresses
 * @property \Cake\ORM\Association\HasMany $Images
 *
 * @method \App\Model\Entity\Animal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Animal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Animal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Animal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Animal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Animal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Animal findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AnimalsTable extends Table
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

        $this->table('animals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Especes', [
            'foreignKey' => 'espece_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'categorie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('Images', [
            'foreignKey' => 'animal_id'
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
            ->requirePresence('animal_name', 'create')
            ->notEmpty('animal_name');

        $validator
            ->integer('sexe')
            ->requirePresence('sexe', 'create')
            ->notEmpty('sexe');

        $validator
            ->requirePresence('race', 'create')
            ->notEmpty('race');

        $validator
            ->date('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->date('arrived')
            ->requirePresence('arrived', 'create')
            ->notEmpty('arrived');

        $validator
            ->date('leaving')
            ->allowEmpty('leaving');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['espece_id'], 'Especes'));
        $rules->add($rules->existsIn(['categorie_id'], 'Categories'));
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especes Model
 *
 * @property \Cake\ORM\Association\HasMany $Animals
 *
 * @method \App\Model\Entity\Espece get($primaryKey, $options = [])
 * @method \App\Model\Entity\Espece newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Espece[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Espece|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Espece patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Espece[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Espece findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EspecesTable extends Table
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

        $this->table('especes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Animals', [
            'foreignKey' => 'espece_id'
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
            ->requirePresence('espece_name', 'create')
            ->notEmpty('espece_name');

        return $validator;
    }
}

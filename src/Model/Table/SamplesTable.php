<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Samples Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Samples
 *
 * @method \App\Model\Entity\Sample get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sample newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sample[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sample|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sample patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sample[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sample findOrCreate($search, callable $callback = null, $options = [])
 */
class SamplesTable extends Table
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

        $this->table('samples');
        $this->displayField('sample_id');
        $this->primaryKey('sample_id');

        $this->belongsTo('Samples', [
            'foreignKey' => 'sample_id',
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
            ->requirePresence('sample_name', 'create')
            ->notEmpty('sample_name');

        $validator
            ->requirePresence('sample_description', 'create')
            ->notEmpty('sample_description');

        $validator
            ->dateTime('sample_timestamp')
            ->requirePresence('sample_timestamp', 'create')
            ->notEmpty('sample_timestamp');

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
        $rules->add($rules->existsIn(['sample_id'], 'Samples'));

        return $rules;
    }
}

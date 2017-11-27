<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Examens Model
 *
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\BelongsTo $Materias
 *
 * @method \App\Model\Entity\Examen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Examen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Examen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Examen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Examen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Examen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Examen findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExamensTable extends Table
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

        $this->setTable('examens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Materias', [
            'foreignKey' => 'materia_id'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('fecha')
            ->allowEmpty('fecha');

        $validator
            ->integer('calificacion')
            ->allowEmpty('calificacion');

        $validator
            ->scalar('condicion_anterior')
            ->maxLength('condicion_anterior', 50)
            ->allowEmpty('condicion_anterior');

        $validator
            ->scalar('profesor_evaluador')
            ->maxLength('profesor_evaluador', 255)
            ->requirePresence('profesor_evaluador', 'create')
            ->notEmpty('profesor_evaluador');

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
        $rules->add($rules->existsIn(['materia_id'], 'Materias'));

        return $rules;
    }
}

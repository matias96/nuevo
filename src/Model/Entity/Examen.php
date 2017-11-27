<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Examen Entity
 *
 * @property string $id
 * @property \Cake\I18n\FrozenTime $fecha
 * @property int $calificacion
 * @property string $condicion_anterior
 * @property string $profesor_evaluador
 * @property string $materia_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Materia $materia
 */
class Examen extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'fecha' => true,
        'calificacion' => true,
        'condicion_anterior' => true,
        'profesor_evaluador' => true,
        'materia_id' => true,
        'created' => true,
        'modified' => true,
        'materia' => true
    ];
}

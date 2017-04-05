<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sample Entity
 *
 * @property int $sample_id
 * @property string $sample_name
 * @property string $sample_description
 * @property \Cake\I18n\Time $sample_timestamp
 *
 * @property \App\Model\Entity\Sample $sample
 */
class Sample extends Entity
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
        '*' => true,
        'sample_id' => false
    ];
}

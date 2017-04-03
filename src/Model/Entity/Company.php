<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $company_id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_address
 * @property string $company_profile
 * @property \Cake\I18n\Time $company_created
 * @property string $company_status
 *
 * @property \App\Model\Entity\Company $company
 */
class Company extends Entity
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
        'company_id' => false
    ];
    // public $name = "Company";
    // public $hasMany = array(
    //         'Branch' => array(
    //           'dependent' => true
    //         )
    //       );
}

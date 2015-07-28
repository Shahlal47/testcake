<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity.
 */
class Student extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'father_name' => true,
        'mother_name' => true,
        'address' => true,
        'email' => true,
        'mobile' => true,
        'nid' => true,
        'created_by' => true,
        'modified_by' => true,
    ];
}

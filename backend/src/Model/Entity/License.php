<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * License Entity
 *
 * @property int $id
 * @property int $computer_id
 * @property string $name
 * @property string $registration_key
 * @property string $system_key
 * @property string $activation_key
 * @property string $id_code
 * @property string $program_code
 * @property string $version_code
 * @property string $version_code2
 * @property string $type_code
 * @property string $license_date
 * @property string $expired_date
 * @property string $module
 * @property string $description
 * @property string $generator_version
 * @property bool $active
 * @property bool $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Computer $computer
 */
class License extends Entity
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
        'id' => false
    ];
}

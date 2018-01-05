<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Computer Entity
 *
 * @property int $id
 * @property int $store_id
 * @property string $id_code
 * @property string $name
 * @property string $description
 * @property string $url
 * @property string $system_key
 * @property bool $active
 * @property bool $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\License[] $licenses
 * @property \App\Model\Entity\NewLicense[] $new_licenses
 */
class Computer extends Entity
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

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HostFamily Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $animal_list
 * @property bool $dog_male
 * @property bool $dog_female
 * @property bool $puppy
 * @property bool $cat_male
 * @property bool $cat_female
 * @property bool $kitten
 * @property bool $rodent
 * @property bool $nac
 * @property bool $poultry
 * @property int $animal_numbre
 * @property bool $house
 * @property string $garden
 * @property bool $cloture
 * @property bool $securised
 * @property bool $premis
 * @property int $familly_membre
 * @property int $children
 * @property bool $experience
 * @property string $place_animal
 * @property string $activity
 * @property string $disponibility
 * @property bool $veterinary_access
 * @property bool $quarantine
 * @property string $note
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 */
class HostFamily extends Entity
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

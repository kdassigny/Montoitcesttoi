<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Animal Entity
 *
 * @property int $id
 * @property string $animal_name
 * @property int $sexe
 * @property int $espece_id
 * @property int $categorie_id
 * @property string $race
 * @property \Cake\I18n\Time $age
 * @property int $address_id
 * @property \Cake\I18n\Time $arrived
 * @property \Cake\I18n\Time $leaving
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Espece $espece
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\Image[] $images
 */
class Animal extends Entity
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

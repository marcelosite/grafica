<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property int $id_usuario
 * @property int $id_cartao
 * @property int $id_funcionario
 * @property int $quantidade
 * @property \Cake\I18n\FrozenTime $data
 * @property int $status
 */
class Pedido extends Entity
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
        'id_usuario' => true,
        'id_cartao' => true,
        'id_funcionario' => true,
        'quantidade' => true,
        'data' => true,
        'status' => true,
    ];
}

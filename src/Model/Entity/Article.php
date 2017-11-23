<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 23/11/17
 * Time: 5:27 PM
 */
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
      '*' => true,
      'id' => false,
      'slug' => false,
    ];
}
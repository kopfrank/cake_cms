<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 23/11/17
 * Time: 5:18 PM
 */
namespace App\Model\Tabel;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
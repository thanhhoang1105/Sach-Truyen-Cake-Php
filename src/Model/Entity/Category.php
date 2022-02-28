<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

class Category extends Entity
{
    protected function _setTitle($name)
    {
        return Text::slug($name);
    }
    protected $_accessible = [
        'name' => true,
        'mota' => true,
        'created' => true,
        'modified' => true,
        'stories' => true,
    ];
}

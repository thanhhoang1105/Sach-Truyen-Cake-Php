<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

class Story extends Entity
{
    protected function _setTitle($name)
    {
        return Text::slug($name);
    }
    protected $_accessible = [
        'name' => true,
        'recap' => true,
        'category_id' => true,
        'image' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'chapters' => true,
    ];
}

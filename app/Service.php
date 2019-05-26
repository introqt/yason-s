<?php

namespace App;

use App\Core\Models\AbstractBaseModel;

class Service extends AbstractBaseModel
{
    const ORDERING = 'order';
    const SELECTING = 'title';

    public function ordering(): string
    {
        return self::ORDERING;
    }

    public function selecting(): string
    {
        return self::SELECTING;
    }
}

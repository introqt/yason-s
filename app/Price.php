<?php

namespace App;

use App\Core\Models\AbstractBaseModel;


class Price extends AbstractBaseModel
{
    const ORDERING = 'price';
    const SELECTING = 'price';

    public function ordering(): string
    {
        return self::ORDERING;
    }

    public function selecting(): string
    {
        return self::SELECTING;
    }
}

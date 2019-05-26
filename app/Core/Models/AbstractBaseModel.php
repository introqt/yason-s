<?php

namespace App\Core\Models;

use App\Core\Scopes\SelectScope;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractBaseModel extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SelectScope);
    }

    abstract public function ordering(): string;

    abstract public function selecting(): string;
}

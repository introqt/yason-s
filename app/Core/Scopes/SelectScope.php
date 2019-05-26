<?php

namespace App\Core\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class SelectScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->select($model->selecting())->orderBy($model->ordering());
    }
}

<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Model;

class CreatedByScope
{
    public static function setCreatedBy(Model $model)
    {
        $model->created_by = auth()->id() == null ? 1 : auth()->id();
    }
}

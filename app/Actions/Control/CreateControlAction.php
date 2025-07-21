<?php

namespace App\Actions\Control;

use App\Actions\CreateAction;
use App\Models\Control;

class CreateControlAction extends CreateAction
{
    protected function createModelInstance(array $data): Control
    {
        return Control::create($data);
    }
}

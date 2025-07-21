<?php

namespace App\Actions\Module;

use App\Actions\CreateAction;
use App\Models\Module;

class CreateModuleAction extends CreateAction
{
    protected function createModelInstance(array $data): Module
    {
        return Module::create($data);
    }
}

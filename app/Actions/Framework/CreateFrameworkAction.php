<?php

namespace App\Actions\Framework;

use App\Actions\CreateAction;
use App\Models\Framework;

class CreateFrameworkAction extends CreateAction
{
    protected function createModelInstance(array $data): Framework
    {
        return Framework::create($data);
    }
}

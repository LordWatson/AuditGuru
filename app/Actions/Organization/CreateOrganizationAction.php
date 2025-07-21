<?php

namespace App\Actions\Organization;

use App\Actions\CreateAction;
use App\Models\Organization;

class CreateOrganizationAction extends CreateAction
{
    protected function createModelInstance(array $data): Organization
    {
        return Organization::create($data);
    }
}

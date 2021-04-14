<?php

namespace App\Providers;

use App\Models\User;
use Konekt\Concord\BaseModuleServiceProvider;
class ModuleServiceProvider extends BaseModuleServiceProvider
{

    protected $models = [
        User::class,
        ];
}

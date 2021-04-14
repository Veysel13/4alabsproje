<?php

namespace App\Repository\Eloquent;

use App\Contracts\User;
use Illuminate\Support\Facades\Event;
use Prettus\Repository\Traits\CacheableRepository;

class UserRepository extends Repository
{
    use CacheableRepository;
    function model()
    {
        return User::class;
    }

    public function create(array $data){

       $users= $this->model->create($data);

        Event::dispatch('new.user.create.after', $users);

       return $users;
    }

}

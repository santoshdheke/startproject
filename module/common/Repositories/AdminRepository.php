<?php

namespace Module\Admin\Repositories;


use Module\Admin\Models\Admin;
use Module\Admin\Repository;

class AdminRepository extends Repository
{
    function getModel()
    {
        return Admin::class;
    }
}
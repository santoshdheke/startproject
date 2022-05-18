<?php

namespace Module\Frontend\Repositories;

use Module\Admin\Repository;

class AdminRepository extends Repository
{
    function getModel()
    {
        return Admin::class;
    }
}
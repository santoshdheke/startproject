<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Prabin;
use Module\Common\Repository;

class PrabinRepository extends Repository
{
    function getModel()
    {
        return Prabin::class;
    }
}

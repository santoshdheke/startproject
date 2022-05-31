<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Arko;
use Module\Common\Repository;

class ArkoRepository extends Repository
{
    function getModel()
    {
        return Arko::class;
    }
}

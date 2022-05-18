<?php

namespace Module\Marketing\Repositories;

use Module\Marketing\Models\Marketing;
use Module\Marketing\Repository;

class MarketingRepository extends Repository
{
    function getModel()
    {
        return Marketing::class;
    }
}
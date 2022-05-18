<?php

namespace Module\Marketing\Repositories;

use Module\Marketing\Models\Hotel;
use Module\Marketing\Repository;

class HotelRepository extends Repository
{
    function getModel()
    {
        return Hotel::class;
    }
}